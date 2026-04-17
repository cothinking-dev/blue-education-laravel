<?php

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Post HTML Sanitization Tests
|--------------------------------------------------------------------------
|
| Edge-case coverage for the static Post::sanitizeHtml() method, which
| uses a Symfony HtmlSanitizer allowlist to strip unsafe HTML.
|
*/

it('returns empty string for null input', function () {
    expect(Post::sanitizeHtml(null))->toBe('');
});

it('returns empty string for empty string input', function () {
    expect(Post::sanitizeHtml(''))->toBe('');
});

it('preserves allowed tags', function () {
    $html = '<p>Hello <strong>world</strong> and <em>friends</em></p>';

    expect(Post::sanitizeHtml($html))->toBe($html);
});

it('preserves links with safe href', function () {
    $html = '<a href="https://example.com">Link</a>';

    expect(Post::sanitizeHtml($html))->toBe($html);
});

it('preserves images with safe src', function () {
    $html = '<img src="https://example.com/photo.jpg" alt="Photo">';

    expect(Post::sanitizeHtml($html))->toContain('src="https://example.com/photo.jpg"');
});

it('strips script tags', function () {
    $html = '<p>Safe</p><script>alert("xss")</script>';

    $result = Post::sanitizeHtml($html);

    expect($result)->toContain('<p>Safe</p>')
        ->and($result)->not->toContain('<script>')
        ->and($result)->not->toContain('alert');
});

it('strips javascript URIs from href', function () {
    $html = '<a href="javascript:alert(1)">Click</a>';

    $result = Post::sanitizeHtml($html);

    expect($result)->not->toContain('javascript:');
});

it('strips event handler attributes', function () {
    $html = '<img src="https://example.com/x.jpg" onerror="alert(1)">';

    $result = Post::sanitizeHtml($html);

    expect($result)->not->toContain('onerror');
});

it('strips onclick attributes', function () {
    $html = '<div onclick="alert(1)">Click me</div>';

    $result = Post::sanitizeHtml($html);

    expect($result)->not->toContain('onclick');
});

it('strips svg elements', function () {
    $html = '<svg onload="alert(1)"><circle r="10"></circle></svg>';

    $result = Post::sanitizeHtml($html);

    expect($result)->not->toContain('<svg')
        ->and($result)->not->toContain('onload');
});

it('strips data URIs from img src', function () {
    $html = '<img src="data:text/html,<script>alert(1)</script>">';

    $result = Post::sanitizeHtml($html);

    expect($result)->not->toContain('data:');
});

it('strips nested script tags inside allowed elements', function () {
    $html = '<div><p>Safe</p><script>alert(1)</script></div>';

    $result = Post::sanitizeHtml($html);

    expect($result)->toContain('Safe')
        ->and($result)->not->toContain('<script>');
});

it('handles malformed unclosed tags gracefully', function () {
    $html = '<p>Unclosed paragraph<strong>bold without close';

    $result = Post::sanitizeHtml($html);

    expect($result)->toBeString()
        ->and($result)->toContain('Unclosed paragraph');
});

it('preserves mailto links', function () {
    $html = '<a href="mailto:info@example.com">Email</a>';

    $result = Post::sanitizeHtml($html);

    expect($result)->toContain('mailto:')
        ->and($result)->toContain('example.com');
});

it('preserves table markup', function () {
    $html = '<table><thead><tr><th>Header</th></tr></thead><tbody><tr><td>Cell</td></tr></tbody></table>';

    $result = Post::sanitizeHtml($html);

    expect($result)->toContain('<table>')
        ->and($result)->toContain('<th>Header</th>')
        ->and($result)->toContain('<td>Cell</td>');
});
