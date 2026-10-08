// Small shared helpers for care-for-kids

export function formatDate(date = new Date()) {
  return date.toISOString().slice(0, 10);
}

git 