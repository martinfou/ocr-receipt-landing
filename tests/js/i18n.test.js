import { test } from 'node:test';
import assert from 'node:assert/strict';
import { translate, fill, lookup, initialLang } from '../../resources/js/i18n.js';

test('a placeholder is filled', () => {
    assert.equal(translate('en', 'calc.years', { n: 5 }), '5 years');
    assert.equal(translate('fr', 'calc.years', { n: 5 }), '5 ans');
});

test('an unknown placeholder is left as-is', () => {
    assert.equal(fill('Step {n} of {total}', { n: 2 }), 'Step 2 of {total}');
});

test('a key missing in French falls back to English', () => {
    assert.equal(lookup('fr', ['nope']), undefined);
    assert.equal(lookup('xx', ['skip']), undefined);
    assert.equal(translate('xx', 'skip'), 'Skip to content');
});

test('a key missing everywhere falls back to the key', () => {
    assert.equal(translate('fr', 'does.not.exist'), 'does.not.exist');
});

test('data-lang wins over a stored "en"', () => {
    assert.equal(initialLang('fr', 'en', 'en-US'), 'fr');
    assert.equal(initialLang(null, 'en', 'fr-CA'), 'en');
    assert.equal(initialLang(undefined, null, 'fr-CA'), 'fr');
    assert.equal(initialLang('', null, 'en-US'), 'en');
});
