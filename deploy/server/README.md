# Server setup (one-time, manual)

`deploy.php` handles application deploys via `dep deploy`. But the server itself
needs three pieces of system-level config that aren't covered by the Deployer
recipe. Install these once on the Hetzner host (168.119.253.191) as `root`:

| File | Installs to | Purpose |
|------|-------------|---------|
| [`caddy/Caddyfile`](caddy/Caddyfile) | `/etc/caddy/Caddyfile` | Reverse proxy, automatic HTTPS, www → apex redirect, security headers |
| [`supervisor/blue-education-worker.conf`](supervisor/blue-education-worker.conf) | `/etc/supervisor/conf.d/blue-education-worker.conf` | Persistent queue worker so `Enquiry` emails actually send |
| [`cron/blue-education-scheduler`](cron/blue-education-scheduler) | `/etc/cron.d/blue-education-scheduler` | Runs Laravel scheduler every minute (regenerates sitemap nightly) |

## Prerequisites on the server

```bash
# As root, one-time:
apt update
apt install -y caddy supervisor cron php8.5-cli php8.5-fpm php8.5-{mbstring,xml,curl,zip,gd,sqlite3,intl,bcmath} unzip git nodejs npm
systemctl enable --now caddy supervisor cron
useradd -m -s /bin/bash deployer
mkdir -p /home/deployer/.ssh
# Add your local public key to /home/deployer/.ssh/authorized_keys
chown -R deployer:deployer /home/deployer/.ssh
chmod 700 /home/deployer/.ssh
chmod 600 /home/deployer/.ssh/authorized_keys
```

## Install order

```bash
# 1. From your local machine, copy the configs to the server:
scp -r deploy/server/* root@168.119.253.191:/tmp/server-config/

# 2. SSH in as root and put them in place:
ssh root@168.119.253.191
cp /tmp/server-config/caddy/Caddyfile           /etc/caddy/Caddyfile
cp /tmp/server-config/supervisor/blue-education-worker.conf  /etc/supervisor/conf.d/
cp /tmp/server-config/cron/blue-education-scheduler          /etc/cron.d/
chmod 644 /etc/cron.d/blue-education-scheduler

# 3. Reload services:
systemctl reload caddy
supervisorctl reread && supervisorctl update
systemctl reload cron

# 4. Verify:
systemctl status caddy
supervisorctl status blue-education-worker:*
sudo tail -f /var/log/syslog | grep CRON   # wait one minute, expect a schedule:run line
```

## DNS — what to point where

Run these in your DNS provider once the server is ready:

| Type | Name | Value | TTL |
|------|------|-------|-----|
| A    | `blueeducation.com.au` | `168.119.253.191` | 300 (lower a day before cutover) |
| A    | `www`                  | `168.119.253.191` | 300 |
| TXT  | `blueeducation.com.au` | (Search Console verification token) | 3600 |
| MX/TXT/CNAME | (Resend domain-verify records) | (shown in Resend dashboard) | 3600 |

After Caddy starts and DNS resolves, hit `https://blueeducation.com.au/up` — Laravel's
built-in health endpoint returns 200 OK.

## First deploy

```bash
# From local machine:
dep deploy

# After the first deploy succeeds, populate the shared .env on the server:
ssh deployer@168.119.253.191
cd ~/blue-education-laravel/shared
vim .env    # paste from .env.production (see .env.example for the full list)

# Then re-deploy so the new env takes effect:
dep deploy

# Apply the curated Wix redirect map (one-time):
ssh deployer@168.119.253.191 'cd ~/blue-education-laravel/current && php artisan db:seed --class=WixRedirectsSeeder --force'
```

## Post-deploy smoke test

```bash
curl -sI https://blueeducation.com.au/up                       # 200
curl -sI https://blueeducation.com.au/about-us                 # 301 → /about
curl -sI https://blueeducation.com.au/sitemap.xml              # 200, XML body
curl -sI https://blueeducation.com.au/admin/login              # 200
```
