// Translation helpers for the landing page, kept free of DOM access so they can be tested.
import { locales } from './locales.js';

// Walk a dotted key ('a.b.c' split into parts) in one language. undefined when missing.
export function lookup(lang, keys) {
    let obj = locales[lang];
    for (const k of keys) {
        if (obj === undefined || obj === null) return undefined;
        obj = obj[k];
    }
    return obj;
}

// Replace {name} placeholders; unknown placeholders are left as-is.
export function fill(value, params) {
    if (typeof value !== 'string' || !params) return value;
    return value.replace(/\{(\w+)\}/g, (m, name) => (params[name] !== undefined ? params[name] : m));
}

// translate('fr', 'a.b', params): the language, then English, then the key itself.
export function translate(lang, key, params) {
    const keys = key.split('.');
    let value = lookup(lang, keys);
    if (value === undefined) value = lookup('en', keys);
    if (value === undefined) return key;
    return fill(value, params);
}

// The URL decides the language: both Blade shells set data-lang on #app, and it wins.
// The stored choice, then the browser language, only apply when the attribute is absent.
export function initialLang(attrLang, storedLang, navigatorLang) {
    if (attrLang && locales[attrLang]) return attrLang;
    if (storedLang && locales[storedLang]) return storedLang;
    return navigatorLang && navigatorLang.startsWith('fr') ? 'fr' : 'en';
}
