import { createApp, reactive } from 'vue';
import App from './components/App.vue';
import { initialLang, translate } from './i18n.js';

const appEl = document.getElementById('app');

// The URL decides the language: both landing shells (/ and /fr) set data-lang on #app.
let storedLang = null;
try { storedLang = localStorage.getItem('lang'); } catch (e) { /* storage blocked */ }
const langState = reactive({
    lang: initialLang(appEl && appEl.dataset ? appEl.dataset.lang : null, storedLang, navigator.language)
});

const app = createApp(App);

app.config.globalProperties.$lang = langState;

// $t('a.b.c', { name: value }) — falls back to English, then to the key.
app.config.globalProperties.$t = (key, params) => translate(langState.lang, key, params);

app.config.globalProperties.$setLang = (newLang) => {
    langState.lang = newLang;
    try { localStorage.setItem('lang', newLang); } catch (e) { /* storage blocked */ }
};

if (appEl && appEl.innerHTML.trim() === '') {
    app.mount('#app');
}
