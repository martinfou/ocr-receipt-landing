import { test } from 'node:test';
import assert from 'node:assert/strict';
import { bleed } from '../../resources/js/bleed.js';
import { money } from '../../resources/js/format.js';
import { PRO_PRICE } from '../../resources/js/config.js';
import { locales } from '../../resources/js/locales.js';

test('the calculator compares against the regular Pro price', () => {
    assert.equal(PRO_PRICE, 199);
});

test('renting costs more: $30 x 5 years', () => {
    const r = bleed(30, 5, PRO_PRICE);
    assert.equal(money(r.total, 'en'), '$1,800');
    assert.equal(r.ahead, true);
    const verdict = locales.en.calc.keepPlain
        .replace('{amount}', money(r.saved, 'en'))
        .replace('{month}', r.breakEven);
    assert.equal(verdict, 'You keep $1,601. Pro pays for itself in month 7.');
});

test('renting is cheaper: $12 x 1 year', () => {
    const r = bleed(12, 1, PRO_PRICE);
    assert.equal(money(r.total, 'en'), '$144');
    assert.equal(r.ahead, false);
    assert.equal(r.breakEven, 17);
    assert.match(locales.en.calc.cheaper, /^Over a short stretch, renting costs less/);
});

function visibleVerdict(lang, monthly, years) {
    const r = bleed(monthly, years, PRO_PRICE);
    const c = locales[lang].calc;
    return c.keepBefore + money(r.saved, lang) + c.keepAfter.replace('{month}', r.breakEven);
}

test('visible verdict, $30 x 5 years, EN', () => {
    assert.equal(visibleVerdict('en', 30, 5), 'You keep $1,601. Pro pays for itself in month 7.');
});

test('visible verdict, $30 x 5 years, FR', () => {
    assert.equal(visibleVerdict('fr', 30, 5), 'Vous gardez 1 601 $. Pro est rentabilisé au mois 7.');
});

test('French money uses a no-break space as group separator and before $', () => {
    assert.equal(money(1800, 'fr'), '1 800 $');
});
