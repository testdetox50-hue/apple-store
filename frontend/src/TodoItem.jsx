export default function TodoItem({ todo, onToggle, onDelete }) {
  return (
    <li className={todo.done ? "done" : ""}>
      <label>
        <input
          type="checkbox"
          checked={todo.done}
          onChange={() => onToggle(todo)}
        />
        <span>{todo.title}</span>
      </label>
      <button
        className="delete"
        onClick={() => onDelete(todo.id)}
        aria-label={`Delete ${todo.title}`}
      >
        ×
      </button>
    </li>
  );
}
