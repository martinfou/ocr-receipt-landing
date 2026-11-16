// Builds the landing Vue app for one language. Shared by the browser entry (app.js)
// and the build-time prerender (ssr.js), so both render exactly the same markup.
import { createSSRApp, reactive } from 'vue';
import App from './components/App.vue';
import { translate } from './i18n.js';

export function createLandingApp(lang) {
    const app = createSSRApp(App);
    const langState = reactive({ lang });

    app.config.globalProperties.$lang = langState;
    // $t('a.b.c', { name: value }) — falls back to English, then to the key.
    app.config.globalProperties.$t = (key, params) => translate(langState.lang, key, params);
    app.config.globalProperties.$setLang = (newLang) => {
        langState.lang = newLang;
        try { localStorage.setItem('lang', newLang); } catch (e) { /* storage blocked */ }
    };
    return app;
}
