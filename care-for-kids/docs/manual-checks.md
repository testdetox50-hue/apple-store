# Manual checks

1. Open `dist/index.html` and confirm styles and the photograph load.
2. Follow header links and the back-to-top link.
3. Expand and collapse every FAQ entry.
4. Review phone, tablet, and desktop layouts.
5. Check keyboard focus and enlarged text.
6. If Node.js is available, run `node check.mjs` from `care-for-kids`.

The script checks local HTML `href` and `src` references and fragment targets. It does not check external URLs, CSS asset references, visual layout, or JavaScript helper behavior.
