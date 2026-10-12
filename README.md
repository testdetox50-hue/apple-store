# Todo App (React + Python)

A small full-stack to-do app:

- **backend/**: a Python [FastAPI](https://fastapi.tiangolo.com/) REST API (keeps data in memory)
- **frontend/**: a React app built with [Vite](https://vitejs.dev/)

## Run it

### 1. Backend (port 8000)

```bash
cd backend
python3 -m venv .venv
source .venv/bin/activate
pip install -r requirements.txt
uvicorn main:app --reload
```

Interactive API docs: http://localhost:8000/docs

### 2. Frontend (port 5173)

In a second terminal:

```bash
cd frontend
npm install
npm run dev
```

Open http://localhost:5173. The Vite dev server forwards `/api` requests to the backend.

## API

| Method | Path              | Body                              |
| ------ | ----------------- | --------------------------------- |
| GET    | `/api/todos`      | none                              |
| POST   | `/api/todos`      | `{ "title": "Buy milk" }`         |
| PATCH  | `/api/todos/{id}` | `{ "title"?: str, "done"?: bool }` |
| DELETE | `/api/todos/{id}` | none                              |
