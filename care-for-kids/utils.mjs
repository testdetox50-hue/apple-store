// Small shared helpers for care-for-kids

export function formatDate(date = new Date()) {
  return date.toISOString().slice(0, 10);
}

export function clamp(value, min, max) {
  return Math.min(Math.max(value, min), max);
}
