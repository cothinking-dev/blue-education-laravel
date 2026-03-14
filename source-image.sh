#!/bin/bash
# Usage: ./source-image.sh "search query" "output-path.webp" WIDTHxHEIGHT
# Example: ./source-image.sh "university students campus" "public/images/heroes/home.webp" 1920x800

set -e
API_KEY="FPSXdea0daa668ec113e35157068ed6f1560"
QUERY="$1"
OUTPUT="$2"
DIMS="$3"
WIDTH="${DIMS%x*}"
HEIGHT="${DIMS#*x}"

# Skip if already exists
if [ -f "$OUTPUT" ]; then
    echo "SKIP: $OUTPUT already exists"
    exit 0
fi

# Search
SEARCH_RESULT=$(curl -s "https://api.freepik.com/v1/resources?q=$(echo "$QUERY" | sed 's/ /%20/g')&limit=5&order=relevance&filters\[content_type\]\[photo\]=1" \
    -H "x-freepik-api-key: $API_KEY" \
    -H "Accept: application/json")

# Get first result ID
RESOURCE_ID=$(echo "$SEARCH_RESULT" | python3 -c "import sys,json; d=json.load(sys.stdin); print(d['data'][0]['id'])" 2>/dev/null)

if [ -z "$RESOURCE_ID" ]; then
    echo "FAIL: No results for '$QUERY'"
    exit 1
fi

# Download
DOWNLOAD_RESULT=$(curl -s "https://api.freepik.com/v1/resources/$RESOURCE_ID/download" \
    -H "x-freepik-api-key: $API_KEY" \
    -H "Accept: application/json")

DOWNLOAD_URL=$(echo "$DOWNLOAD_RESULT" | python3 -c "import sys,json; d=json.load(sys.stdin); print(d['data']['url'])" 2>/dev/null)

if [ -z "$DOWNLOAD_URL" ]; then
    echo "FAIL: Could not get download URL for resource $RESOURCE_ID"
    echo "$DOWNLOAD_RESULT" | python3 -c "import sys,json; print(json.dumps(json.load(sys.stdin), indent=2))" 2>/dev/null || echo "$DOWNLOAD_RESULT"
    exit 1
fi

# Download the actual image
TMPFILE=$(mktemp /tmp/freepik_XXXXXX)
curl -sL "$DOWNLOAD_URL" -o "$TMPFILE"

# Detect format and convert to WebP
mkdir -p "$(dirname "$OUTPUT")"
magick "$TMPFILE" -resize "${WIDTH}x${HEIGHT}^" -gravity center -extent "${WIDTH}x${HEIGHT}" -quality 80 "$OUTPUT"
rm -f "$TMPFILE"

FILESIZE=$(stat -c%s "$OUTPUT" 2>/dev/null || stat -f%z "$OUTPUT")
echo "OK: $OUTPUT ($(($FILESIZE/1024))KB)"
