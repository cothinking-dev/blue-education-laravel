#!/bin/bash
# Usage: ./generate-image.sh "prompt" "output-path.webp" WIDTHxHEIGHT [aspect_ratio]
set -e
API_KEY="FPSXdea0daa668ec113e35157068ed6f1560"
PROMPT="$1"
OUTPUT="$2"
DIMS="$3"
ASPECT="${4:-widescreen_16_9}"
WIDTH="${DIMS%x*}"
HEIGHT="${DIMS#*x}"

if [ -f "$OUTPUT" ]; then
    echo "SKIP: $OUTPUT already exists"
    exit 0
fi

# Create task
TASK_RESULT=$(curl -s -X POST "https://api.freepik.com/v1/ai/mystic" \
  -H "x-freepik-api-key: $API_KEY" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d "{\"prompt\":\"$PROMPT\",\"model\":\"realism\",\"resolution\":\"2k\",\"aspect_ratio\":\"$ASPECT\"}")

TASK_ID=$(echo "$TASK_RESULT" | python3 -c "import sys,json; d=json.load(sys.stdin); print(d['data']['task_id'])" 2>/dev/null)

if [ -z "$TASK_ID" ]; then
    echo "FAIL: Could not create task for '$PROMPT'"
    echo "$TASK_RESULT"
    exit 1
fi

# Poll for completion
for i in $(seq 1 20); do
    sleep 4
    STATUS_RESULT=$(curl -s "https://api.freepik.com/v1/ai/mystic/$TASK_ID" \
      -H "x-freepik-api-key: $API_KEY" \
      -H "Accept: application/json")

    STATUS=$(echo "$STATUS_RESULT" | python3 -c "import sys,json; d=json.load(sys.stdin); print(d['data']['status'])" 2>/dev/null)

    if [ "$STATUS" = "COMPLETED" ]; then
        IMAGE_URL=$(echo "$STATUS_RESULT" | python3 -c "import sys,json; d=json.load(sys.stdin); g=d['data']['generated'][0]; print(g['url'] if isinstance(g,dict) else g)" 2>/dev/null)

        if [ -z "$IMAGE_URL" ]; then
            echo "FAIL: No image URL in completed task"
            exit 1
        fi

        TMPFILE=$(mktemp /tmp/mystic_XXXXXX.png)
        curl -sL "$IMAGE_URL" -o "$TMPFILE"
        mkdir -p "$(dirname "$OUTPUT")"
        magick "$TMPFILE" -resize "${WIDTH}x${HEIGHT}^" -gravity center -extent "${WIDTH}x${HEIGHT}" -quality 80 "$OUTPUT"
        rm -f "$TMPFILE"
        FILESIZE=$(stat -c%s "$OUTPUT" 2>/dev/null || stat -f%z "$OUTPUT")
        echo "OK: $OUTPUT ($(($FILESIZE/1024))KB)"
        exit 0
    elif [ "$STATUS" = "FAILED" ]; then
        echo "FAIL: Generation failed for '$PROMPT'"
        exit 1
    fi
done

echo "FAIL: Timeout waiting for task $TASK_ID"
exit 1
