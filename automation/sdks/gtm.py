"""Google Tag Manager SDK — list, create, update, publish tags/triggers/variables.

Auth: OAuth 2.0 Desktop flow. The GTM API does not accept service-account emails
in its User Management UI (it requires a real Google Account), so we fall back to
user-context OAuth. On first run a browser tab opens for consent; the refresh
token is then cached in ``gtm-token.json`` and reused silently thereafter.

The authenticating Google account must have publish access on the container.
"""

import os
from dotenv import load_dotenv
from google.oauth2.credentials import Credentials
from google_auth_oauthlib.flow import InstalledAppFlow
from google.auth.transport.requests import Request
from googleapiclient.discovery import build

load_dotenv()

SCOPES = [
    "https://www.googleapis.com/auth/tagmanager.readonly",
    "https://www.googleapis.com/auth/tagmanager.edit.containers",
    "https://www.googleapis.com/auth/tagmanager.edit.containerversions",
    "https://www.googleapis.com/auth/tagmanager.publish",
]

_HERE = os.path.dirname(__file__)
CLIENT_SECRETS_FILE = os.environ.get(
    "GTM_CLIENT_SECRETS",
    os.path.join(_HERE, "..", "gtm-client-secrets.json"),
)
TOKEN_FILE = os.path.join(_HERE, "..", "gtm-token.json")

ACCOUNT_ID = os.environ.get("GTM_ACCOUNT_ID", "")
CONTAINER_ID = os.environ.get("GTM_CONTAINER_ID", "")


def _get_credentials():
    creds = None
    if os.path.exists(TOKEN_FILE):
        creds = Credentials.from_authorized_user_file(TOKEN_FILE, SCOPES)
    if not creds or not creds.valid:
        if creds and creds.expired and creds.refresh_token:
            creds.refresh(Request())
        else:
            if not os.path.exists(CLIENT_SECRETS_FILE):
                raise FileNotFoundError(
                    f"OAuth client secrets not found at {CLIENT_SECRETS_FILE}. "
                    "Create a Desktop App OAuth client in GCP Console > "
                    "APIs & Services > Credentials, then download as JSON."
                )
            flow = InstalledAppFlow.from_client_secrets_file(CLIENT_SECRETS_FILE, SCOPES)
            creds = flow.run_local_server(port=0)
        with open(TOKEN_FILE, "w") as f:
            f.write(creds.to_json())
    return creds


SERVICE = build("tagmanager", "v2", credentials=_get_credentials())


def _container_path():
    if not ACCOUNT_ID or not CONTAINER_ID:
        raise ValueError(
            "GTM_ACCOUNT_ID and GTM_CONTAINER_ID must be set in .env. "
            "Use list_accounts() and list_containers() to discover IDs, "
            "or pass GTM_PUBLIC_ID to auto-resolve from a GTM-XXXX string."
        )
    return f"accounts/{ACCOUNT_ID}/containers/{CONTAINER_ID}"


# ──────────────────────────────────────────────
# Discovery
# ──────────────────────────────────────────────

def list_accounts():
    response = SERVICE.accounts().list().execute()
    return [
        {"id": a["accountId"], "name": a["name"], "path": a["path"]}
        for a in response.get("account", [])
    ]


def list_containers(account_id=None):
    aid = account_id or ACCOUNT_ID
    if not aid:
        raise ValueError("account_id required.")
    response = SERVICE.accounts().containers().list(parent=f"accounts/{aid}").execute()
    return [
        {
            "id": c["containerId"],
            "name": c["name"],
            "public_id": c.get("publicId", ""),
            "domain_names": c.get("domainName", []),
            "path": c["path"],
        }
        for c in response.get("container", [])
    ]


def resolve_container_by_public_id(public_id):
    """Find the (account_id, container_id) numeric pair for a GTM-XXXX public ID."""
    for account in list_accounts():
        for c in list_containers(account["id"]):
            if c["public_id"] == public_id:
                return account["id"], c["id"], c
    return None, None, None


# ──────────────────────────────────────────────
# Workspaces / tags / triggers / variables
# ──────────────────────────────────────────────

def default_workspace_id():
    """Return the ID of the first workspace (typically 'Default Workspace')."""
    parent = _container_path()
    response = SERVICE.accounts().containers().workspaces().list(parent=parent).execute()
    workspaces = response.get("workspace", [])
    if not workspaces:
        raise RuntimeError("No workspaces found in container.")
    return workspaces[0]["workspaceId"]


def list_tags(workspace_id):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    response = SERVICE.accounts().containers().workspaces().tags().list(parent=path).execute()
    return response.get("tag", [])


def list_triggers(workspace_id):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    response = SERVICE.accounts().containers().workspaces().triggers().list(parent=path).execute()
    return response.get("trigger", [])


def list_variables(workspace_id):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    response = SERVICE.accounts().containers().workspaces().variables().list(parent=path).execute()
    return response.get("variable", [])


def create_tag(workspace_id, body):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    return (
        SERVICE.accounts().containers().workspaces().tags()
        .create(parent=path, body=body).execute()
    )


def update_tag(tag_path, body):
    return (
        SERVICE.accounts().containers().workspaces().tags()
        .update(path=tag_path, body=body).execute()
    )


def create_trigger(workspace_id, body):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    return (
        SERVICE.accounts().containers().workspaces().triggers()
        .create(parent=path, body=body).execute()
    )


def find_all_pages_trigger(workspace_id):
    """The built-in 'All Pages' trigger is type=pageview with no filters."""
    for t in list_triggers(workspace_id):
        if t.get("type") == "pageview" and not t.get("filter") and not t.get("customEventFilter"):
            return t
    return None


# ──────────────────────────────────────────────
# Versions & publish
# ──────────────────────────────────────────────

def create_version(workspace_id, name="", notes=""):
    path = f"{_container_path()}/workspaces/{workspace_id}"
    body = {"name": name, "notes": notes}
    return (
        SERVICE.accounts().containers().workspaces()
        .create_version(path=path, body=body).execute()
    )


def publish_version(version_id):
    path = f"{_container_path()}/versions/{version_id}"
    return (
        SERVICE.accounts().containers().versions()
        .publish(path=path).execute()
    )


def get_live_version():
    path = _container_path()
    return SERVICE.accounts().containers().versions().live(parent=path).execute()
