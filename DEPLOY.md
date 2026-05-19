# Deploy checklist — Blue Education

Phase-ordered. Items marked ⏸ are blocked on something external (DNS access for
the client domain, mostly).

---

## Phase 1 — Local prep (no external dependencies)

| | Task | Status |
|--|------|--------|
| 1.1 | `composer install --no-dev --optimize-autoloader` works | ✅ |
| 1.2 | `npm run build` works | ✅ |
| 1.3 | `php artisan test` passes (memory: `-d memory_limit=1G`) | ✅ |
| 1.4 | `.env.production` ready locally (template below) | ⏳ |
| 1.5 | Hetzner SSH key (`~/.ssh/hetzner-blue-education`) exists | (you) |

### `.env.production` template

```env
APP_NAME="Blue Education"
APP_ENV=production
APP_KEY=                         # generate with: php artisan key:generate --show
APP_DEBUG=false
APP_URL=https://blueeducation.com.au

LOG_CHANNEL=stack
LOG_STACK=daily
LOG_LEVEL=warning

DB_CONNECTION=sqlite
DB_DATABASE=/home/deployer/blue-education-laravel/shared/database.sqlite

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_SECURE_COOKIE=true

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
CACHE_STORE=database

# Mail (Resend on cothink.ing)
MAIL_MAILER=resend
MAIL_FROM_ADDRESS="blueeducation@cothink.ing"
MAIL_FROM_NAME="Blue Education"
RESEND_API_KEY=                  # from resend.com → API Keys

# Analytics + error tracking (PostHog, via GTM container GTM-PP6DRX6L)
GTM_CONTAINER_ID=GTM-PP6DRX6L
POSTHOG_PROJECT_TOKEN=phc_pN7fpZKNzor5VLgZpHMiwRbM2H22c4zZ7G5MeudNq977
POSTHOG_HOST=https://us.i.posthog.com
POSTHOG_CAPTURE_EXCEPTIONS=true

# Site verification (paste after registering)
GOOGLE_SITE_VERIFICATION=
BING_SITE_VERIFICATION=

WHATSAPP_NUMBER=61411708899
TWITTER_HANDLE=@BlueEducationAU
```

---

## Phase 2 — Third-party services (each independent)

### 2a. Resend (mail) — depends only on cothink.ing DNS (your control)
| | Task | Status |
|--|------|--------|
| 2a.1 | Resend account created, `cothink.ing` added as domain | (you) |
| 2a.2 | Resend's SPF/DKIM/MX records added to cothink.ing DNS | (you, "send" subdomain) |
| 2a.3 | API key generated, pasted into `.env` (`RESEND_API_KEY`) | ⏳ |
| 2a.4 | Test send works locally (`php artisan tinker` → `Mail::raw(...)`) | ⏳ |

### 2b. PostHog (analytics + errors) — no DNS dependency
| | Task | Status |
|--|------|--------|
| 2b.1 | PostHog project exists | ✅ |
| 2b.2 | `posthog/posthog-php` installed | ✅ |
| 2b.3 | Server-side `$exception` capture wired (gated on `POSTHOG_CAPTURE_EXCEPTIONS=true`) | ✅ |
| 2b.4 | Client-side `posthog.init` provisioned via GTM tag | ⏳ (script ready) |

### 2c. Google Tag Manager — depends on OAuth flow (your browser)
| | Task | Status |
|--|------|--------|
| 2c.1 | GTM container `GTM-PP6DRX6L` exists | ✅ |
| 2c.2 | Container snippet in `<x-gtm />` blade component | ✅ |
| 2c.3 | Consent Mode v2 default-denied in head | ✅ |
| 2c.4 | OAuth Desktop client downloaded → `automation/gtm-client-secrets.json` | ✅ |
| 2c.5 | Run `python tools/setup_gtm_posthog_tag.py` (provisions PostHog tag + consent trigger + publishes new version) | ⏳ |

### 2d. Google Search Console — blocked on blueeducation.com.au DNS ⏸
| | Task | Status |
|--|------|--------|
| 2d.1 | Service account JSON downloaded → `automation/ga-credentials.json` | ✅ |
| 2d.2 | URL-prefix property `https://blueeducation.com.au/` registered using meta-tag method → paste token into `GOOGLE_SITE_VERIFICATION` env var | ⏸ (needs DNS cutover first so Google can fetch the page) |
| 2d.3 | SA email `blueeducation@cosmic-signer-474305-d3.iam.gserviceaccount.com` added as Owner | ⏸ |
| 2d.4 | Run `python tools/setup_search_console.py` to submit sitemap | ⏸ |

### 2e. Bing Webmaster Tools — same DNS dependency ⏸
| | Task | Status |
|--|------|--------|
| 2e.1 | Property added, verification token pasted into `BING_SITE_VERIFICATION` | ⏸ |
| 2e.2 | Sitemap submitted manually | ⏸ |

---

## Phase 3 — Server (Hetzner) one-time setup

See `deploy/server/README.md` for command-by-command.

| | Task | Status |
|--|------|--------|
| 3.1 | Caddy + Supervisor + PHP 8.5 + Node installed on box | (you) |
| 3.2 | `deployer` user exists with SSH key authorized | (you) |
| 3.3 | `/etc/caddy/Caddyfile` copied from `deploy/server/caddy/Caddyfile` | (you) |
| 3.4 | `/etc/supervisor/conf.d/blue-education-worker.conf` copied | (you) |
| 3.5 | `/etc/cron.d/blue-education-scheduler` copied | (you) |

---

## Phase 4 — First deploy

| | Task | Status |
|--|------|--------|
| 4.1 | `dep deploy` succeeds (will fail at `deploy:verify_env` until step 4.2) | ⏳ |
| 4.2 | SCP `.env.production` → `deployer@host:~/blue-education-laravel/shared/.env` | ⏳ |
| 4.3 | `dep deploy` succeeds end-to-end | ⏳ |
| 4.4 | `ssh deployer@host 'cd ~/blue-education-laravel/current && php artisan db:seed --class=WixRedirectsSeeder --force'` (110 redirects) | ⏳ |
| 4.5 | `php artisan storage:link` (deployer recipe handles automatically) | (auto) |

---

## Phase 5 — DNS cutover ⏸ (blocked on client)

| | Task | Status |
|--|------|--------|
| 5.1 | Client transfers/configures nameservers on blueeducation.com.au | ⏸ |
| 5.2 | TTL dropped to 300s, propagation confirmed | ⏸ |
| 5.3 | A record (and `www` A record) → `168.119.253.191` | ⏸ |
| 5.4 | Caddy auto-provisions Let's Encrypt cert (watch `journalctl -u caddy -f`) | ⏸ |
| 5.5 | `curl -sI https://blueeducation.com.au/up` → 200 | ⏸ |

---

## Phase 6 — Post-cutover

| | Task | Status |
|--|------|--------|
| 6.1 | Run GSC verification (paste token into `GOOGLE_SITE_VERIFICATION`, redeploy, click Verify) | ⏸ |
| 6.2 | Run `python tools/setup_search_console.py` (submit sitemap) | ⏸ |
| 6.3 | Bing Webmaster Tools same flow | ⏸ |
| 6.4 | Spot-check 10 redirects via curl (`/about-us`, `/contact-us`, `/faqs`, `/post/...`, etc.) | ⏸ |
| 6.5 | Submit homepage to OG validators (Facebook Sharing Debugger, Twitter Card Validator) | ⏸ |
| 6.6 | Lighthouse on homepage + 3 representative inner pages | ⏸ |
| 6.7 | Send a real enquiry via the contact form, confirm receipt | ⏸ |
| 6.8 | Login to `/admin/redirects`, sort by hits desc, re-target any catch-alls that are getting real Google-bot or human traffic | ⏸ (24h after cutover) |
| 6.9 | Raise TTL back to 3600s once stable for a few days | ⏸ |

---

## What's blocked vs unblocked right now

**Unblocked, you can do today:**
- Phase 1 (local prep)
- Phase 2a (Resend on cothink.ing — you control that DNS)
- Phase 2c (GTM provisioning — needs only the OAuth client which is in place)
- Phase 3 (Hetzner box setup)
- Phase 4 partial (first deploy works once Hetzner is set up; redirects seed will work)

**Blocked on client DNS:**
- Phase 2d, 2e (search engine verification)
- Phase 5 (cutover)
- Phase 6 (post-cutover smoke tests)

---

## Reference

- `deploy/server/README.md` — one-time server setup commands
- `automation/README.md` — GTM/GSC Python automation
- `database/seeders/WixRedirectsSeeder.php` — the 110 curated Wix → new-site redirects
