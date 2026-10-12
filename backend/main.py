from itertools import count
from typing import Dict, List, Optional

from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel

from config import ALLOWED_ORIGINS, MAX_TITLE_LENGTH

app = FastAPI(title="Todo API")

app.add_middleware(
    CORSMiddleware,
    allow_origins=ALLOWED_ORIGINS,
    allow_methods=["*"],
    allow_headers=["*"],
)


class TodoCreate(BaseModel):
    title: str


class TodoUpdate(BaseModel):
    title: Optional[str] = None
    done: Optional[bool] = None


class Todo(BaseModel):
    id: int
    title: str
    done: bool = False


# In-memory store; resets when the server restarts.
_ids = count(1)
todos: Dict[int, Todo] = {}


@app.get("/api/todos", response_model=List[Todo])
def list_todos():
    return list(todos.values())


@app.get("/api/stats")
def get_stats():
    done = sum(1 for t in todos.values() if t.done)
    return {"total": len(todos), "done": done, "remaining": len(todos) - done}


@app.post("/api/todos", response_model=Todo, status_code=201)
def create_todo(payload: TodoCreate):
    title = payload.title.strip()
    if not title:
        raise HTTPException(status_code=400, detail="Title cannot be empty")
    if len(title) > MAX_TITLE_LENGTH:
        raise HTTPException(
            status_code=400,
            detail=f"Title must be at most {MAX_TITLE_LENGTH} characters",
        )
    todo = Todo(id=next(_ids), title=title)
    todos[todo.id] = todo
    return todo


@app.patch("/api/todos/{todo_id}", response_model=Todo)
def update_todo(todo_id: int, payload: TodoUpdate):
    todo = todos.get(todo_id)
    if todo is None:
        raise HTTPException(status_code=404, detail="Todo not found")
    if payload.title is not None:
        todo.title = payload.title.strip() or todo.title
    if payload.done is not None:
        todo.done = payload.done
    return todo


@app.delete("/api/todos/{todo_id}", status_code=204)
def delete_todo(todo_id: int):
    if todos.pop(todo_id, None) is None:
        raise HTTPException(status_code=404, detail="Todo not found")
