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

export const listTodos = () => request(API);

export const createTodo = (title) =>
  request(API, { method: "POST", body: JSON.stringify({ title }) });

export const updateTodo = (id, changes) =>
  request(`${API}/${id}`, { method: "PATCH", body: JSON.stringify(changes) });

export const deleteTodo = (id) => request(`${API}/${id}`, { method: "DELETE" });
