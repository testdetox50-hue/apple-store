# Troubleshooting

## Asset checker cannot find the HTML

Run `node check.mjs` from `care-for-kids`; paths resolve relative to the current working directory.

## Missing styles or photograph

Keep `index.html`, `styles.css`, and `reading.jpg` together in `dist`. Check filenames and HTML references.

## Fonts look different offline

Google Fonts needs network access. Fallback fonts may change text wrapping.

## Navigation link stops working

Match the link's fragment to an existing ID exactly. Run the asset checker to identify missing targets.

## Unexpected text characters

Save HTML and CSS as UTF-8 and preserve the HTML charset declaration. Check the browser before changing content based on terminal output alone.
