# automation/

Python tooling for provisioning third-party services that sit alongside the
Laravel app: Google Tag Manager and Google Search Console. SDKs in `sdks/`,
one-shot scripts in `tools/`.

## Setup

```bash
cd automation
python3 -m venv .venv
.venv/bin/pip install -r requirements.txt
cp .env.example .env   # fill in IDs (see below)
```

### Credentials (gitignored)

| File | Source | Used by |
|------|--------|---------|
| `ga-credentials.json` | GCP Console → IAM → Service Accounts → [your SA] → Keys → Add Key → JSON | `sdks/gsc.py` |
| `gtm-client-secrets.json` | GCP Console → APIs & Services → Credentials → Create OAuth client → **Desktop app** → Download JSON | `sdks/gtm.py` |
| `gtm-token.json` | Auto-generated on first run after browser consent | `sdks/gtm.py` |

**Why two auth methods?** GTM's User Management UI refuses service-account
emails ("This email doesn't match a Google Account"), so GTM has to use
user-context OAuth. Search Console accepts service accounts cleanly.

The service account email (this project's is
`blueeducation@cosmic-signer-474305-d3.iam.gserviceaccount.com`) must be
invited as **Owner** on the verified Search Console property
(Settings → Users and permissions).

The OAuth Desktop client doesn't need any invite — on first run it opens a
browser tab and you grant access using your own Google account, which is
already on the GTM container.

## SDKs

| Module | Purpose |
|--------|---------|
| `sdks/gtm.py` | Google Tag Manager — list/create tags, triggers, variables, publish versions |
| `sdks/gsc.py` | Google Search Console — sitemap submission, URL inspection, search analytics |

## Tools

| Script | Purpose |
|--------|---------|
| `tools/setup_gtm_posthog_tag.py` | Idempotently provisions the PostHog snippet + consent trigger inside the GTM container, then publishes a new version |
| `tools/setup_search_console.py` | Adds the domain property, prints the DNS TXT record to add, submits the sitemap |

## Usage

```bash
.venv/bin/python tools/setup_gtm_posthog_tag.py
.venv/bin/python tools/setup_search_console.py
```
