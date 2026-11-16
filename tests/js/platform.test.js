import { test } from 'node:test';
import assert from 'node:assert/strict';
import { detectPlatform } from '../../resources/js/platform.js';

const MAC = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130 Safari/537.36';
const WIN = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130 Safari/537.36';
const LINUX = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130 Safari/537.36';
const ANDROID = 'Mozilla/5.0 (Linux; Android 14; Pixel 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130 Mobile Safari/537.36';
const IPHONE = 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1';

test('desktop operating systems from the user agent', () => {
    assert.equal(detectPlatform({ userAgent: MAC }), 'macos');
    assert.equal(detectPlatform({ userAgent: WIN }), 'windows');
    assert.equal(detectPlatform({ userAgent: LINUX }), 'linux');
});

test('userAgentData.platform wins when present', () => {
    assert.equal(detectPlatform({ uaDataPlatform: 'Windows', userAgent: '' }), 'windows');
    assert.equal(detectPlatform({ uaDataPlatform: 'macOS', userAgent: '' }), 'macos');
});

test('phones and tablets, including iPadOS and Android (which says Linux), are mobile', () => {
    assert.equal(detectPlatform({ userAgent: ANDROID }), 'mobile');
    assert.equal(detectPlatform({ userAgent: IPHONE }), 'mobile');
    assert.equal(detectPlatform({ userAgent: MAC, maxTouchPoints: 5 }), 'mobile');
});

test('unknown platform returns null', () => {
    assert.equal(detectPlatform({ userAgent: 'curl/8.0' }), null);
    assert.equal(detectPlatform(), null);
});
