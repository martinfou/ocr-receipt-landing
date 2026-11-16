import { reactive } from 'vue';

// Theme in effect, shared across components. App.vue updates it whenever it
// toggles <html class="dark">; components read it (e.g. to pick screenshot frames).
export const themeState = reactive({
    // Starts light (matches the prerendered markup); App.vue sets the real value on mount.
    dark: false
});

// Path of a tour screenshot frame for the page language and the theme in effect.
export function tourFrame(lang, name) {
    return '/tour/' + (lang === 'fr' ? 'fr' : 'en') + '/' + (themeState.dark ? 'dark' : 'light') + '/' + name + '.webp';
}
