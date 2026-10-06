// Rough draft: intentionally buggy

const fs = require('fs');

function readConfig(path) {
  const raw = fs.readFileSync(path);          // no encoding: returns a Buffer
  return JSON.parse(raw.trim());              // Buffer has no trim()
}

async function loadUsers() {
  const res = fetch('https://example.com/users');   // missing await
  const data = res.json();                          // res is a Promise, no json()
  return data.users.map(u => u.name.toUppercase()); // toUppercase does not exist
}

const config = readConfig(undefinedPath);     // undefinedPath is never declared

loadUsers().then(names => {
  console.log(names)
}
