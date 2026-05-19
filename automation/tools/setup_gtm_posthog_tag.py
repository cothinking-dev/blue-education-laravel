"""Provision the PostHog Custom HTML tag inside the GTM container.

Idempotent — if a tag named ``PostHog Analytics`` already exists, it is
updated in place; otherwise it is created. A new container version is
created and published at the end so the change goes live immediately.

Run::

    .venv/bin/python tools/setup_gtm_posthog_tag.py

Requires ``GTM_ACCOUNT_ID``, ``GTM_CONTAINER_ID``, ``POSTHOG_PROJECT_TOKEN``,
``POSTHOG_HOST`` in ``.env``.
"""

import os
import sys
import time

# Allow ``python tools/x.py`` to import from ``sdks/``
sys.path.insert(0, os.path.dirname(os.path.dirname(os.path.abspath(__file__))))

from dotenv import load_dotenv

from sdks import gtm

load_dotenv()

POSTHOG_TOKEN = os.environ.get("POSTHOG_PROJECT_TOKEN", "")
POSTHOG_HOST = os.environ.get("POSTHOG_HOST", "https://us.i.posthog.com")
TAG_NAME = "PostHog Analytics"
CONSENT_TRIGGER_NAME = "Cookie Consent — Analytics Granted"
CONSENT_EVENT = "cookie_consent_accepted"


def posthog_snippet() -> str:
    """The official PostHog JS init snippet, with token and host inlined."""
    return f"""<script>
!function(t,e){{var o,n,p,r;e.__SV||(window.posthog=e,e._i=[],e.init=function(i,s,a){{function g(t,e){{var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){{t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}}}(p=t.createElement("script")).type="text/javascript",p.crossOrigin="anonymous",p.async=!0,p.src=s.api_host.replace(".i.posthog.com","-assets.i.posthog.com")+"/static/array.js",(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r);var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],u.toString=function(t){{var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e}},u.people.toString=function(){{return u.toString(1)+".people (stub)"}},o="init capture register register_once register_for_session unregister unregister_for_session getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSessionId getSurveys getActiveMatchingSurveys renderSurvey canRenderSurvey getNextSurveyStep identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException loadToolbar get_property getSessionProperty createPersonProfile opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing clear_opt_in_out_capturing debug".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])}},e.__SV=1)}}(document,window.posthog||[]);
posthog.init('{POSTHOG_TOKEN}', {{
  api_host: '{POSTHOG_HOST}',
  person_profiles: 'identified_only',
  capture_pageview: true,
  capture_pageleave: true,
  autocapture: true,
  disable_session_recording: false,
  opt_out_capturing_by_default: false
}});
</script>"""


def ensure_consent_trigger(workspace_id: str) -> str:
    """Create (or find) a custom event trigger that fires on cookie consent."""
    for t in gtm.list_triggers(workspace_id):
        if t.get("name") == CONSENT_TRIGGER_NAME:
            print(f"  ✓ Trigger exists: {CONSENT_TRIGGER_NAME} (id={t['triggerId']})")
            return t["triggerId"]
    body = {
        "name": CONSENT_TRIGGER_NAME,
        "type": "customEvent",
        "customEventFilter": [
            {
                "type": "equals",
                "parameter": [
                    {"type": "template", "key": "arg0", "value": "{{_event}}"},
                    {"type": "template", "key": "arg1", "value": CONSENT_EVENT},
                ],
            }
        ],
    }
    created = gtm.create_trigger(workspace_id, body)
    print(f"  + Created trigger: {CONSENT_TRIGGER_NAME} (id={created['triggerId']})")
    return created["triggerId"]


def upsert_posthog_tag(workspace_id: str, trigger_id: str) -> None:
    snippet = posthog_snippet()
    desired_body = {
        "name": TAG_NAME,
        "type": "html",
        "parameter": [
            {"type": "template", "key": "html", "value": snippet},
            {"type": "boolean", "key": "supportDocumentWrite", "value": "false"},
        ],
        "firingTriggerId": [trigger_id],
        "tagFiringOption": "oncePerEvent",
    }
    for t in gtm.list_tags(workspace_id):
        if t.get("name") == TAG_NAME:
            print(f"  ~ Updating existing tag: {TAG_NAME} (id={t['tagId']})")
            merged = {**t, **desired_body}
            gtm.update_tag(t["path"], merged)
            return
    print(f"  + Creating tag: {TAG_NAME}")
    gtm.create_tag(workspace_id, desired_body)


def main() -> None:
    if not POSTHOG_TOKEN:
        sys.exit("POSTHOG_PROJECT_TOKEN missing in .env")
    if not gtm.ACCOUNT_ID or not gtm.CONTAINER_ID:
        public_id = os.environ.get("GTM_PUBLIC_ID", "")
        if not public_id:
            sys.exit(
                "Set GTM_ACCOUNT_ID + GTM_CONTAINER_ID in .env, or GTM_PUBLIC_ID "
                "(e.g. GTM-PP6DRX6L) to auto-resolve."
            )
        print(f"Resolving container by public ID {public_id}...")
        acc, cont, info = gtm.resolve_container_by_public_id(public_id)
        if not cont:
            sys.exit(f"Container {public_id} not visible to this account.")
        print(f"  → account={acc} container={cont} ({info['name']})")
        print(
            "  Write these to .env:\n"
            f"    GTM_ACCOUNT_ID={acc}\n"
            f"    GTM_CONTAINER_ID={cont}"
        )
        gtm.ACCOUNT_ID = acc
        gtm.CONTAINER_ID = cont

    print("\n→ Resolving default workspace...")
    workspace_id = gtm.default_workspace_id()
    print(f"  workspace_id={workspace_id}")

    print("\n→ Ensuring consent trigger...")
    trigger_id = ensure_consent_trigger(workspace_id)

    print("\n→ Upserting PostHog tag...")
    upsert_posthog_tag(workspace_id, trigger_id)

    stamp = time.strftime("%Y-%m-%d %H:%M")
    print("\n→ Creating + publishing container version...")
    version = gtm.create_version(
        workspace_id,
        name=f"PostHog provisioning {stamp}",
        notes="Automated via automation/tools/setup_gtm_posthog_tag.py",
    )
    container_version = version.get("containerVersion", {})
    version_id = container_version.get("containerVersionId")
    if version_id:
        gtm.publish_version(version_id)
        print(f"  ✓ Published version {version_id}")
    else:
        print("  ! create_version returned no containerVersionId — check console.")


if __name__ == "__main__":
    main()
