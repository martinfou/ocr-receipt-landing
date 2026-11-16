// Build-time prerender entry (vite build --ssr). scripts/prerender.mjs imports this
// and writes the rendered page into resources/prerendered/ for the Blade shells.
import { renderToString } from 'vue/server-renderer';
import { createLandingApp } from './landing-app.js';
import { locales } from './locales.js';

export async function renderLanding(lang) {
    return renderToString(createLandingApp(lang));
}

export { locales };
