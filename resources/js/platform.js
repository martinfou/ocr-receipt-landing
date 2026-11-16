// Which installer to offer: 'macos', 'windows', 'linux', 'mobile' (phones and
// tablets, including iPadOS), or null when detection fails.
// Takes the navigator fields as arguments so it can be tested without a browser.
export function detectPlatform({ uaDataPlatform = '', userAgent = '', maxTouchPoints = 0 } = {}) {
    const ua = String(userAgent);
    const p = String(uaDataPlatform).toLowerCase();

    if (/android|iphone|ipad|ipod|mobile/i.test(ua) || p === 'android' || p === 'ios') return 'mobile';
    // iPadOS reports a Mac user agent; a touch screen gives it away.
    if ((p === 'macos' || /macintosh|mac os x/i.test(ua)) && maxTouchPoints > 1) return 'mobile';

    if (p === 'macos' || /macintosh|mac os x/i.test(ua)) return 'macos';
    if (p === 'windows' || /windows/i.test(ua)) return 'windows';
    if (p === 'linux' || /linux|x11|cros/i.test(ua)) return 'linux';
    return null;
}

// Detection in the current browser.
export function currentPlatform() {
    if (typeof navigator === 'undefined') return null;
    return detectPlatform({
        uaDataPlatform: navigator.userAgentData && navigator.userAgentData.platform,
        userAgent: navigator.userAgent,
        maxTouchPoints: navigator.maxTouchPoints
    });
}
