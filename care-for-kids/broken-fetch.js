// Config loading and user fetching helpers

const fs = require('fs');

function readConfig(path) {
  const raw = fs.readFileSync(path, 'utf8');
  return JSON.parse(raw.trim());
}

async function loadUsers() {
  const res = await fetch('https://example.com/users');
  if (!res.ok) throw new Error(`Request failed: ${res.status}`);
  const data = await res.json();
  return data.users.map(u => u.name.toUpperCase());
}

module.exports = { readConfig, loadUsers };

if (require.main === module) {
  const configPath = process.argv[2] || 'config.json';
  if (fs.existsSync(configPath)) {
    console.log(readConfig(configPath));
  }
  loadUsers()
    .then(names => console.log(names))
    .catch(err => console.error(err.message));
}
