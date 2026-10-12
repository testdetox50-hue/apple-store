import os

# Comma-separated list of origins allowed to call the API.
ALLOWED_ORIGINS = os.getenv("ALLOWED_ORIGINS", "http://localhost:5173").split(",")

MAX_TITLE_LENGTH = 200
