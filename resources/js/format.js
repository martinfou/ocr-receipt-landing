// Whole-dollar CAD amounts in the page language: "$1,800" (en) / "1 800 $" (fr).
export function money(amount, lang) {
    const value = Math.round(amount);
    return lang === 'fr'
        ? value.toLocaleString('fr-CA') + ' $'
        : '$' + value.toLocaleString('en-CA');
}
