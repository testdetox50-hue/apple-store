import { useEffect, useState } from "react";

const API = "/api/todos";

async function request(url, options = {}) {
  const res = await fetch(url, {
    headers: { "Content-Type": "application/json" },
    ...options,
  });
  if (!res.ok) {
    const body = await res.json().catch(() => ({}));
    throw new Error(body.detail || `Request failed (${res.status})`);
  }
  return res.status === 204 ? null : res.json();
}

export default function App() {
  const [todos, setTodos] = useState([]);
  const [title, setTitle] = useState("");
  const [error, setError] = useState("");

  useEffect(() => {
    request(API).then(setTodos).catch((e) => setError(e.message));
  }, []);

  async function addTodo(e) {
    e.preventDefault();
    if (!title.trim()) return;
    try {
      const todo = await request(API, {
        method: "POST",
        body: JSON.stringify({ title }),
      });
      setTodos((prev) => [...prev, todo]);
      setTitle("");
      setError("");
    } catch (e) {
      setError(e.message);
    }
  }

  async function toggleTodo(todo) {
    try {
      const updated = await request(`${API}/${todo.id}`, {
        method: "PATCH",
        body: JSON.stringify({ done: !todo.done }),
      });
      setTodos((prev) => prev.map((t) => (t.id === updated.id ? updated : t)));
    } catch (e) {
      setError(e.message);
    }
  }

  async function deleteTodo(id) {
    try {
      await request(`${API}/${id}`, { method: "DELETE" });
      setTodos((prev) => prev.filter((t) => t.id !== id));
    } catch (e) {
      setError(e.message);
    }
  }

  const remaining = todos.filter((t) => !t.done).length;

  return (
    <main className="container">
      <h1>Todos</h1>

      <form onSubmit={addTodo} className="add-form">
        <input
          value={title}
          onChange={(e) => setTitle(e.target.value)}
          placeholder="What needs doing?"
          aria-label="New todo"
        />
        <button type="submit">Add</button>
      </form>

      {error && <p className="error">{error}</p>}

      <ul className="todo-list">
        {todos.map((todo) => (
          <li key={todo.id} className={todo.done ? "done" : ""}>
            <label>
              <input
                type="checkbox"
                checked={todo.done}
                onChange={() => toggleTodo(todo)}
              />
              <span>{todo.title}</span>
            </label>
            <button
              className="delete"
              onClick={() => deleteTodo(todo.id)}
              aria-label={`Delete ${todo.title}`}
            >
              ×
            </button>
          </li>
        ))}
      </ul>

      <p className="footer">
        {todos.length === 0
          ? "Nothing here yet."
          : `${remaining} of ${todos.length} remaining`}
      </p>
    </main>
  );
}
