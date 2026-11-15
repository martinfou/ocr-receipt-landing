// The Bleed calculator's math: what renting costs over the period, compared
// with paying for Pro once.
export function bleed(monthly, years, proPrice) {
    const total = monthly * 12 * years;
    return {
        total,
        saved: total - proPrice,
        ahead: total > proPrice,
        breakEven: Math.ceil(proPrice / monthly)
    };
}
