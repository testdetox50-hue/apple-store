# apple-store reviewer notes

## Architecture
This is a small full-stack todo application with a FastAPI backend and Vite/React frontend. The backend exposes `/api/todos` CRUD endpoints plus `/api/stats`, storing `Todo` models in process memory (`backend/main.py`). The frontend calls the same `/api` paths through a Vite development proxy (`frontend/vite.config.js`) and keeps the current todo list in React state.

## Conventions
- Backend API models are Pydantic classes in `backend/main.py`: use separate `TodoCreate`, `TodoUpdate`, and `Todo` models rather than accepting arbitrary dictionaries.
- Todo titles must be normalized and validated through `clean_title()` in `backend/main.py`: trim whitespace, reject empty values with HTTP 400, and enforce `MAX_TITLE_LENGTH` from `backend/config.py` (200 characters).
- Missing resources use `HTTPException` with status 404 and detail `"Todo not found"` in update/delete handlers.
- Collection endpoints use `/api/todos`; statistics are exposed separately at `/api/stats`, matching the API table in `README.md`.
- Successful creation returns HTTP 201, deletion returns 204, and response shapes are declared with FastAPI `response_model` where applicable (`backend/main.py`).
- Frontend API access is centralized in `frontend/src/api.js`; components should call its exported functions rather than using `fetch` directly.
- React state updates preserve immutable patterns, such as mapping the updated todo or filtering deleted IDs in `frontend/src/App.jsx`.
- `TodoItem` receives data and callbacks from `App` and uses `todo.id` as its list key (`frontend/src/TodoItem.jsx`).
- Backend tests use `TestClient(main.app)` and clear the global todo store automatically before each test (`backend/test_main.py`).

## Intentional non-standard choices
- Persistence is intentionally in-memory: `todos` and `_ids` in `backend/main.py` reset with the server, as documented in `README.md`; do not flag the absence of a database for this app.
- The frontend computes the remaining count locally in `App.jsx` instead of consuming `/api/stats`; the stats endpoint is independently tested as a backend API.
- The CORS middleware allows all methods and headers while restricting origins via `ALLOWED_ORIGINS` (`backend/main.py`, `backend/config.py`).

## Watch out for
- Bypassing `clean_title()` in either create or update paths would allow whitespace-only or overlong titles and violate tests in `backend/test_main.py`.
- PATCH handling must preserve omitted fields: `TodoUpdate` uses optional values, and updates should only assign fields that are not `None`.
- Do not return a JSON body from DELETE; the client explicitly treats status 204 as `null` in `frontend/src/api.js`.
- Preserve API error details: the frontend displays `body.detail`, so replacing structured FastAPI errors with incompatible responses can degrade UI error handling.
- Changes to backend routes or frontend API paths must account for the `/api` proxy configured in `frontend/vite.config.js`.
