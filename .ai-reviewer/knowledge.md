# apple-store reviewer notes

## Architecture

A small full-stack Todo application with a FastAPI backend and Vite/React frontend. The backend exposes REST endpoints under `/api`, stores todos in process memory, and serves Pydantic-validated models; the frontend calls those endpoints through a shared fetch wrapper and manages UI state in `App.jsx`. Vite proxies `/api` to the local backend during development (`frontend/vite.config.js`).

## Conventions

- Backend configuration belongs in `backend/config.py`; environment-driven settings use `os.getenv`, as with `ALLOWED_ORIGINS`, while shared limits such as `MAX_TITLE_LENGTH` are constants.
- API request and response shapes are represented with Pydantic models in `backend/main.py` (`TodoCreate`, `TodoUpdate`, and `Todo`), and route handlers declare response models where applicable.
- REST resources use `/api/todos`; collection operations are `GET`/`POST`, item updates use `PATCH`, and deletion returns HTTP 204. Missing items explicitly raise `HTTPException` with 404.
- Todo creation strips whitespace and validates non-empty and maximum-length titles in `backend/main.py`; preserve these checks when adding creation paths.
- Frontend API access is centralized in `frontend/src/api.js`; components should use its `listTodos`, `createTodo`, `updateTodo`, and `deleteTodo` helpers rather than calling `fetch` directly.
- React state updates use functional setters for potentially stale collections, e.g. `setTodos((prev) => ...)` in `frontend/src/App.jsx`.
- `App.jsx` owns collection state and request error display; `TodoItem.jsx` is a presentational child receiving `todo`, `onToggle`, and `onDelete` callbacks.
- Backend tests use `fastapi.testclient.TestClient` against `main.app`, clear the shared `main.todos` store with an autouse fixture, and assert HTTP status plus JSON behavior (`backend/test_main.py`).

## Intentional non-standard choices

- Persistence is intentionally in-memory: `todos` and the ID counter in `backend/main.py` reset with the server process. Do not flag the lack of a database unless persistence is explicitly being requested.
- The frontend computes the remaining count locally (`frontend/src/App.jsx`) even though `/api/stats` exists; the stats endpoint is part of the API but is not currently required for rendering.
- Empty or whitespace-only titles are ignored client-side, while the backend remains authoritative and returns 400 for invalid creation input.
- On PATCH, a blank `title` preserves the existing title (`backend/main.py`); this is intentional partial-update behavior rather than a validation omission.

## Watch out for

- Do not bypass `frontend/src/api.js` error handling; it extracts FastAPI’s `detail` field and handles 204 responses specially.
- Preserve the 200-character title limit and trimming behavior consistently for new or modified endpoints.
- Avoid assuming IDs restart during tests: `clear_todos` empties the store but does not reset the module-level `itertools.count`.
- Changes to the in-memory store are process-local and unsuitable for multi-worker deployment; flag code that relies on cross-process consistency.
- Keep CORS origins configurable through `ALLOWED_ORIGINS`; do not replace the restricted default with a wildcard without an explicit security reason.