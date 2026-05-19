"""Google Search Console SDK — sites, sitemaps, URL inspection, search analytics.

Auth: Service Account. Add the service account email as a property user
in Search Console settings before use.
"""

import os
from dotenv import load_dotenv
from google.oauth2 import service_account
from googleapiclient.discovery import build

load_dotenv()

_HERE = os.path.dirname(__file__)
CREDENTIALS_FILE = os.environ.get(
    "GOOGLE_APPLICATION_CREDENTIALS",
    os.path.join(_HERE, "..", "ga-credentials.json"),
)
SCOPES = [
    "https://www.googleapis.com/auth/webmasters",
]

_credentials = service_account.Credentials.from_service_account_file(
    CREDENTIALS_FILE, scopes=SCOPES
)
SERVICE = build("searchconsole", "v1", credentials=_credentials)

SITE_URL = os.environ.get("GSC_SITE_URL", "")


# ──────────────────────────────────────────────
# Sites
# ──────────────────────────────────────────────

def list_sites():
    response = SERVICE.sites().list().execute()
    return [
        {"url": s["siteUrl"], "permission": s["permissionLevel"]}
        for s in response.get("siteEntry", [])
    ]


def add_site(site_url=None):
    """Add a site to Search Console. For domain properties pass 'sc-domain:example.com'.

    Note: this only registers the property. You still need to *verify* ownership
    (e.g. by adding a DNS TXT record for domain properties).
    """
    url = site_url or SITE_URL
    if not url:
        raise ValueError("SITE_URL not set.")
    return SERVICE.sites().add(siteUrl=url).execute()


def get_site(site_url=None):
    url = site_url or SITE_URL
    if not url:
        raise ValueError("SITE_URL not set.")
    return SERVICE.sites().get(siteUrl=url).execute()


# ──────────────────────────────────────────────
# Sitemaps
# ──────────────────────────────────────────────

def list_sitemaps(site_url=None):
    url = site_url or SITE_URL
    if not url:
        raise ValueError("SITE_URL not set.")
    response = SERVICE.sitemaps().list(siteUrl=url).execute()
    return [
        {
            "path": s["path"],
            "type": s.get("type", ""),
            "submitted": s.get("lastSubmitted", ""),
            "last_downloaded": s.get("lastDownloaded", ""),
            "warnings": s.get("warnings", 0),
            "errors": s.get("errors", 0),
        }
        for s in response.get("sitemap", [])
    ]


def submit_sitemap(sitemap_url, site_url=None):
    """Submit (or re-submit) a sitemap by full URL."""
    url = site_url or SITE_URL
    if not url:
        raise ValueError("SITE_URL not set.")
    return SERVICE.sitemaps().submit(siteUrl=url, feedpath=sitemap_url).execute()


# ──────────────────────────────────────────────
# URL inspection
# ──────────────────────────────────────────────

def inspect_url(page_url, site_url=None):
    url = site_url or SITE_URL
    if not url:
        raise ValueError("SITE_URL not set.")
    body = {"inspectionUrl": page_url, "siteUrl": url}
    response = SERVICE.urlInspection().index().inspect(body=body).execute()
    result = response.get("inspectionResult", {})
    index_status = result.get("indexStatusResult", {})
    return {
        "url": page_url,
        "verdict": index_status.get("verdict", ""),
        "coverage_state": index_status.get("coverageState", ""),
        "indexing_state": index_status.get("indexingState", ""),
        "last_crawl_time": index_status.get("lastCrawlTime", ""),
        "robots_txt_state": index_status.get("robotsTxtState", ""),
        "page_fetch_state": index_status.get("pageFetchState", ""),
    }
