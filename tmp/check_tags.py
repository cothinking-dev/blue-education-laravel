#!/usr/bin/env python3
"""Scan Blade templates for unclosed HTML tags."""

import re
import glob
import sys
from html.parser import HTMLParser
from pathlib import Path

VOID_ELEMENTS = {
    'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input',
    'link', 'meta', 'param', 'source', 'track', 'wbr',
}

# Blade/Alpine directives that look like tags but aren't
SKIP_PREFIXES = ('x-', 'livewire:', 'alpine:', 'wire:')


class TagChecker(HTMLParser):
    def __init__(self, filename):
        super().__init__()
        self.filename = filename
        self.stack = []  # [(tag, line)]
        self.issues = []

    def handle_starttag(self, tag, attrs):
        tag = tag.lower()
        if tag in VOID_ELEMENTS:
            return
        if any(tag.startswith(p) for p in SKIP_PREFIXES):
            return
        self.stack.append((tag, self.getpos()[0]))

    def handle_endtag(self, tag):
        tag = tag.lower()
        if tag in VOID_ELEMENTS:
            return
        if any(tag.startswith(p) for p in SKIP_PREFIXES):
            return

        # Find matching open tag (search from top of stack)
        for i in range(len(self.stack) - 1, -1, -1):
            if self.stack[i][0] == tag:
                # Check for unclosed tags between this and the match
                unclosed = self.stack[i + 1:]
                for utag, uline in unclosed:
                    self.issues.append(
                        f"  Line {uline}: <{utag}> opened but never closed "
                        f"(closed </{tag}> on line {self.getpos()[0]} skipped over it)"
                    )
                self.stack = self.stack[:i]
                return

        # No matching open tag found
        self.issues.append(
            f"  Line {self.getpos()[0]}: </{tag}> has no matching opening tag"
        )

    def report(self):
        # Anything left on stack is unclosed
        for tag, line in self.stack:
            # Skip common layout tags that span the whole file
            if tag in ('html', 'head', 'body'):
                continue
            self.issues.append(f"  Line {line}: <{tag}> never closed (still open at EOF)")
        return self.issues


def preprocess_blade(content):
    """Strip Blade/Alpine syntax that confuses the HTML parser."""
    # Remove Blade comments
    content = re.sub(r'\{\{--.*?--\}\}', '', content, flags=re.DOTALL)
    # Remove Blade echo/directives that might contain < >
    content = re.sub(r'\{\{\{.*?\}\}\}', '', content, flags=re.DOTALL)
    content = re.sub(r'\{\{.*?\}\}', '', content, flags=re.DOTALL)
    content = re.sub(r'\{!!.*?!!\}', '', content, flags=re.DOTALL)
    # Remove @directives (but keep the HTML around them)
    content = re.sub(r'@\w+(\((?:[^()]*|\((?:[^()]*|\([^()]*\))*\))*\))?', '', content)
    # Remove Alpine x-bind shorthand :attr="..."
    # Remove <x-...> component tags (self-closing and paired)
    content = re.sub(r'<x-[\w.:/-]+(?:\s[^>]*)?\s*/>', '', content, flags=re.DOTALL)
    content = re.sub(r'<x-[\w.:/-]+(?:\s[^>]*)?>', '', content, flags=re.DOTALL)
    content = re.sub(r'</x-[\w.:/-]+>', '', content)
    # Remove <x-slot:...> tags
    content = re.sub(r'<x-slot:[^>]*/?>', '', content)
    content = re.sub(r'</x-slot:[^>]*>', '', content)
    return content


def check_file(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        raw = f.read()

    cleaned = preprocess_blade(raw)
    checker = TagChecker(filepath)
    try:
        checker.feed(cleaned)
    except Exception as e:
        return [f"  Parse error: {e}"]
    return checker.report()


def main():
    base = Path('/home/jothamlec/co_projects/blue-education-laravel/resources/views')
    files = sorted(base.rglob('*.blade.php'))

    total_issues = 0
    for f in files:
        rel = f.relative_to(base.parent.parent)
        issues = check_file(str(f))
        if issues:
            print(f"\n{rel}")
            for issue in issues:
                print(issue)
            total_issues += len(issues)

    print(f"\n{'='*60}")
    print(f"Scanned {len(files)} files, found {total_issues} potential issues.")
    if total_issues == 0:
        print("All clear — no unclosed tags detected.")


if __name__ == '__main__':
    main()
