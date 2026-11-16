import { createApp } from 'vue';
import { createLandingApp } from './landing-app.js';
import { initialLang } from './i18n.js';
import App from './components/App.vue';

const appEl = document.getElementById('app');

if (appEl) {
    // The URL decides the language: both landing shells (/ and /fr) set data-lang on #app.
    let storedLang = null;
    try { storedLang = localStorage.getItem('lang'); } catch (e) { /* storage blocked */ }
    const lang = initialLang(appEl.dataset ? appEl.dataset.lang : null, storedLang, navigator.language);

    if (appEl.hasAttribute('data-prerendered')) {
        // The page text was rendered at build time (resources/prerendered/); hydrate it.
        createLandingApp(lang).mount(appEl);
    } else if (appEl.innerHTML.trim() === '') {
        // No prerendered markup: render on the client. Same globals, plain (non-hydrating) app.
        const ssrApp = createLandingApp(lang);
        const app = createApp(App);
        Object.assign(app.config.globalProperties, ssrApp.config.globalProperties);
        app.mount(appEl);
    }
}
