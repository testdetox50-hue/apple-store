# apple-store reviewer notes

## Architecture

This is a small full-stack Todo application: `backend/main.py` provides a FastAPI REST API, while `frontend/src/App.jsx` contains the React UI. The frontend uses Vite (`frontend/vite.config.js`) and calls relative `/api/todos` URLs, which are proxied to the backend during development. Backend state is process-local and stored in an in-memory dictionary.

## Conventions

- Backend routes are mounted under `/api/todos` and use conventional REST methods: `GET`, `POST`, `PATCH`, and `DELETE` (`backend/main.py`, `README.md`).
- Request and response schemas are defined with Pydantic models (`TodoCreate`, `TodoUpdate`, and `Todo`) in `backend/main.py`; route decorators declare response models and status codes.
- Todo IDs are generated monotonically with `itertools.count`, and the store is keyed by integer ID (`backend/main.py`).
- Create and update operations trim titles. Empty create titles return HTTP 400; an empty update title leaves the existing title unchanged (`backend/main.py`).
- Missing todo IDs consistently raise `HTTPException` with status 404 and `"Todo not found"` (`backend/main.py`).
- The frontend centralizes fetch behavior in the local `request()` helper, including JSON headers, error extraction from `detail`, and special handling for HTTP 204 (`frontend/src/App.jsx`).
- React state updates use functional setters when based on prior state, such as adding, replacing, and filtering todos (`frontend/src/App.jsx`).
- The UI uses controlled inputs, stable todo IDs as React keys, and accessible labels/aria labels (`frontend/src/App.jsx`).
- Frontend source is colocated under `frontend/src`; the entry point renders `App` in `React.StrictMode` and imports component styles (`frontend/src/main.jsx`).

## Intentional non-standard choices

- Persistence is intentionally absent: `todos` and `_ids` in `backend/main.py` reset whenever the server restarts, as documented in the README.
- Development CORS permits all methods and headers but restricts origins to `http://localhost:5173` (`backend/main.py`); the Vite proxy handles normal local browser requests.
- Updating a title to whitespace does not reject the request or clear the title; it preserves the prior title (`backend/main.py`).

## Watch out for

- Do not introduce absolute frontend API URLs or bypass the `/api` prefix; this would break the Vite proxy convention (`frontend/src/App.jsx`, `frontend/vite.config.js`).
- Preserve the 204 delete response handling. Attempting to parse JSON for successful deletes will fail (`frontend/src/App.jsx`).
- New backend routes should retain explicit response models, status codes, and 404 handling consistent with `backend/main.py`.
- Avoid assuming todo ordering or persistence beyond the current process; the implementation currently returns dictionary insertion order and has no database.
- Changes to CORS origins must remain aligned with the frontend development origin unless deployment configuration is added (`backend/main.py`).