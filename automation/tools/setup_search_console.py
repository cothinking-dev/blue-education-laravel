"""Register the Blue Education site with Google Search Console + submit sitemap.

Service-account flow. The service account email must already have access to
the property (added in Search Console > Settings > Users and permissions).

For a fresh domain property the workflow is:

  1. Run this once → you'll get an error 'site not verified', plus the DNS
     TXT record to add (printed below for convenience).
  2. Add the TXT record at your DNS provider.
  3. Wait for DNS to propagate (~5-60 min).
  4. Re-run → site_url is added and sitemap submitted.

Idempotent: safe to run repeatedly.
"""

import os
import sys

sys.path.insert(0, os.path.dirname(os.path.dirname(os.path.abspath(__file__))))

from dotenv import load_dotenv
from googleapiclient.errors import HttpError

from sdks import gsc

load_dotenv()

SITE_URL = os.environ.get("GSC_SITE_URL", "sc-domain:blueeducation.com.au")
SITEMAP_URL = os.environ.get(
    "GSC_SITEMAP_URL", "https://blueeducation.com.au/sitemap.xml"
)


def main() -> None:
    print(f"→ Site:    {SITE_URL}")
    print(f"→ Sitemap: {SITEMAP_URL}")

    print("\n→ Current properties visible to the service account:")
    try:
        sites = gsc.list_sites()
        if not sites:
            print("  (none — service account has no properties yet)")
        for s in sites:
            print(f"  - {s['url']:<50} ({s['permission']})")
    except HttpError as e:
        sys.exit(f"  ! list_sites failed: {e}")

    already = any(s["url"] == SITE_URL for s in sites)
    if not already:
        print(f"\n→ Adding {SITE_URL}...")
        try:
            gsc.add_site(SITE_URL)
            print("  ✓ Added.")
        except HttpError as e:
            print(f"  ! add_site failed: {e}")
            if SITE_URL.startswith("sc-domain:"):
                domain = SITE_URL.replace("sc-domain:", "")
                print(
                    "\n  For a domain property you must verify ownership via DNS TXT:\n"
                    f"    1. Go to https://search.google.com/search-console\n"
                    f"    2. Add property → Domain → {domain}\n"
                    f"    3. Copy the TXT record Google shows you (starts with 'google-site-verification=')\n"
                    f"    4. Add it as a TXT record on the apex of {domain}\n"
                    f"    5. Click 'Verify' in Search Console\n"
                    f"    6. Re-run this script — it will then submit the sitemap.\n"
                )
            return

    print(f"\n→ Submitting sitemap {SITEMAP_URL}...")
    try:
        gsc.submit_sitemap(SITEMAP_URL, SITE_URL)
        print("  ✓ Submitted.")
    except HttpError as e:
        sys.exit(f"  ! submit_sitemap failed: {e}")

    print("\n→ Sitemaps now registered on property:")
    for s in gsc.list_sitemaps(SITE_URL):
        print(
            f"  - {s['path']} (submitted={s['submitted']}, "
            f"errors={s['errors']}, warnings={s['warnings']})"
        )


if __name__ == "__main__":
    main()
