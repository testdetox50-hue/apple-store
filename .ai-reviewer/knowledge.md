# apple-store reviewer notes

## Architecture
This is a small full-stack Todo application with a FastAPI backend and a Vite/React frontend. The backend exposes `/api/todos` CRUD endpoints plus `/api/stats`, storing todos in process memory; the frontend calls relative `/api` URLs and relies on Vite’s development proxy. Backend tests use FastAPI’s `TestClient` and pytest.

## Conventions
- Backend API models are defined as Pydantic classes in `backend/main.py`: `TodoCreate`, `TodoUpdate`, and `Todo`; response models are declared directly on route decorators.
- Todo titles are normalized and validated through the shared `clean_title()` helper in `backend/main.py`: whitespace is stripped, empty values return HTTP 400, and length is limited by `MAX_TITLE_LENGTH` from `backend/config.py`.
- Missing resources consistently raise `HTTPException(status_code=404, detail="Todo not found")` in update and delete handlers.
- API routes use the `/api` prefix (`backend/main.py`), and frontend API access is centralized in `frontend/src/api.js` rather than calling `fetch` from components.
- React state updates are immutable and functional where needed, for example `setTodos((prev) => prev.map(...))` and filtering in `frontend/src/App.jsx`.
- Components use `.jsx` files and default exports (`frontend/src/App.jsx`, `frontend/src/TodoItem.jsx`); application bootstrap and `React.StrictMode` are in `frontend/src/main.jsx`.
- Frontend errors are surfaced from API failures through the shared `request()` helper and displayed by `App` as `<p className="error">`.
- Tests clear the shared todo dictionary before each test via the autouse fixture in `backend/test_main.py`; validation behavior is tested for both creation and updates.

## Intentional non-standard choices
- Persistence is deliberately in-memory: `todos` and the ID counter live in `backend/main.py`, and all data resets when the server restarts.
- The frontend calculates the remaining count locally in `frontend/src/App.jsx` instead of consuming the backend’s `/api/stats` endpoint.
- `frontend/src/api.js` always sends `Content-Type: application/json`, including requests such as DELETE that have no body; this is part of the shared request wrapper.

## Watch out for
- Do not introduce frontend calls to `http://localhost:8000` directly; use relative `/api` paths so the Vite proxy and deployed routing remain usable (`frontend/src/api.js`, `frontend/vite.config.js`).
- Preserve title cleaning on both POST and PATCH. Bypassing `clean_title()` would make create/update validation inconsistent (`backend/main.py`).
- Avoid mutating React arrays or todo objects in place; existing handlers replace arrays using `map`, `filter`, and spread operations (`frontend/src/App.jsx`).
- Changes to the in-memory store must account for process restarts and test isolation. Tests clear `main.todos`, but they do not reset `_ids` (`backend/test_main.py`).
- Keep CORS origins configurable through `ALLOWED_ORIGINS` (`backend/config.py`) rather than hard-coding additional production origins in `backend/main.py`.