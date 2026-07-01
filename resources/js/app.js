import { createApp, reactive } from 'vue';
import App from './components/App.vue';
import { locales } from './locales.js';

// Create a reactive state for current language
const storedLang = localStorage.getItem('lang');
const browserLang = navigator.language && navigator.language.startsWith('fr') ? 'fr' : 'en';
const langState = reactive({
    lang: storedLang || browserLang
});

const app = createApp(App);

// Attach language state and translate helper globally
app.config.globalProperties.$lang = langState;
app.config.globalProperties.$t = (key) => {
    const keys = key.split('.');
    let obj = locales[langState.lang];
    for (const k of keys) {
        if (!obj || obj[k] === undefined) {
            // fallback to English
            let fallbackObj = locales['en'];
            for (const fk of keys) {
                if (fallbackObj !== undefined) fallbackObj = fallbackObj[fk];
            }
            return fallbackObj !== undefined ? fallbackObj : key;
        }
        obj = obj[k];
    }
    return obj;
};

// Global helper to switch language
app.config.globalProperties.$setLang = (newLang) => {
    langState.lang = newLang;
    localStorage.setItem('lang', newLang);
};

app.mount('#app');
