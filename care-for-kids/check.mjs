import fs from 'node:fs';
const html = fs.readFileSync('dist/index.html', 'utf8');
for (const [, ref] of html.matchAll(/(?:href|src)="([^"]+)"/g)) {
  if (ref.startsWith('#')) {
    if (!html.includes(`id="${ref.slice(1)}"`)) throw new Error(`Missing anchor: ${ref}`);
  } else if (!/^(https?:|data:)/.test(ref) && !fs.existsSync(`dist/${ref}`)) {
    throw new Error(`Missing asset: ${ref}`);
  }
}
console.log('All local assets and navigation targets verified.');
