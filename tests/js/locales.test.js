import { test } from 'node:test';
import assert from 'node:assert/strict';
import { locales } from '../../resources/js/locales.js';

function shape(value, path = '', out = []) {
    if (value && typeof value === 'object') {
        for (const [k, v] of Object.entries(value)) shape(v, path ? path + '.' + k : k, out);
    } else {
        out.push(path);
    }
    return out;
}

test('every English landing string has a French counterpart', () => {
    const fr = new Set(shape(locales.fr));
    const missing = shape(locales.en).filter((k) => !fr.has(k));
    assert.deepEqual(missing, []);
});

test('every French landing string has an English counterpart', () => {
    const en = new Set(shape(locales.en));
    const missing = shape(locales.fr).filter((k) => !en.has(k));
    assert.deepEqual(missing, []);
});

function get(obj, path) {
    return path.split('.').reduce((o, k) => (o == null ? o : o[k]), obj);
}

function placeholders(s) {
    return [...s.matchAll(/\{(\w+)\}/g)].map((m) => m[1]).sort();
}

test('{placeholder} names match between English and French', () => {
    const mismatches = shape(locales.en)
        .filter((k) => typeof get(locales.en, k) === 'string' && typeof get(locales.fr, k) === 'string')
        .filter((k) => placeholders(get(locales.en, k)).join() !== placeholders(get(locales.fr, k)).join());
    assert.deepEqual(mismatches, []);
});
