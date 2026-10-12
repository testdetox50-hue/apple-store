import { useEffect, useState } from "react";
import * as api from "./api.js";
import TodoItem from "./TodoItem.jsx";

export default function App() {
  const [todos, setTodos] = useState([]);
  const [title, setTitle] = useState("");
  const [error, setError] = useState("");

  useEffect(() => {
    api.listTodos().then(setTodos).catch((e) => setError(e.message));
  }, []);

  async function addTodo(e) {
    e.preventDefault();
    if (!title.trim()) return;
    try {
      const todo = await api.createTodo(title);
      setTodos((prev) => [...prev, todo]);
      setTitle("");
      setError("");
    } catch (e) {
      setError(e.message);
    }
  }

  async function toggleTodo(todo) {
    try {
      const updated = await api.updateTodo(todo.id, { done: !todo.done });
      setTodos(todos.map((t) => (t.id === updated.id ? updated : t)));
    } catch (e) {
      setError(e.message);
    }
  }

  async function deleteTodo(id) {
    try {
      await api.deleteTodo(id);
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
        {todos.map((todo, index) => (
          <TodoItem
            key={index}
            todo={todo}
            onToggle={toggleTodo}
            onDelete={deleteTodo}
          />
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
