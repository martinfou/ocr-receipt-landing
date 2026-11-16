// Prerenders the landing page for each language, so crawlers, AI assistants and
// link previews get the full text in the HTML. Runs after `vite build --ssr`.
// Output (committed): resources/prerendered/landing-{en,fr}.html and faq-{en,fr}.json,
// included by resources/views/partials/landing-shell.blade.php.
import { mkdir, writeFile } from 'node:fs/promises';
import { fileURLToPath, pathToFileURL } from 'node:url';
import path from 'node:path';

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const { renderLanding, locales } = await import(pathToFileURL(path.join(root, 'bootstrap/ssr/ssr.js')).href);
const outDir = path.join(root, 'resources/prerendered');
await mkdir(outDir, { recursive: true });

const stripTags = (html) => html.replace(/<[^>]+>/g, '');

for (const lang of ['en', 'fr']) {
    const html = await renderLanding(lang);
    await writeFile(path.join(outDir, `landing-${lang}.html`), html + '\n');

    // FAQPage structured data from the same FAQ strings the page shows.
    const faq = {
        '@context': 'https://schema.org',
        '@type': 'FAQPage',
        inLanguage: lang === 'fr' ? 'fr-CA' : 'en-CA',
        mainEntity: locales[lang].faq.items.map((item) => ({
            '@type': 'Question',
            name: item.q,
            acceptedAnswer: { '@type': 'Answer', text: stripTags(item.a) }
        }))
    };
    await writeFile(path.join(outDir, `faq-${lang}.json`), JSON.stringify(faq, null, 2) + '\n');
    console.log(`prerendered ${lang}: ${html.length} chars`);
}
