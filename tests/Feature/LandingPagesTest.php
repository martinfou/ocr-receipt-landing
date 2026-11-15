<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPagesTest extends TestCase
{
    public function test_english_landing_returns_200(): void
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_french_landing_returns_200(): void
    {
        $this->get('/fr')->assertStatus(200);
    }

    public function test_english_landing_mounts_the_app_in_english(): void
    {
        $this->get('/')
            ->assertSee('<html lang="en">', false)
            ->assertSee('data-lang="en"', false);
    }

    public function test_french_landing_mounts_the_same_app_in_french(): void
    {
        $this->get('/fr')
            ->assertSee('<html lang="fr">', false)
            ->assertSee('id="app" data-lang="fr"', false)
            ->assertSee('Arrêtez de louer vos reçus', false);
    }

    public function test_both_landings_have_the_hreflang_pair(): void
    {
        foreach (['/', '/fr'] as $url) {
            $this->get($url)
                ->assertSee('<link rel="alternate" hreflang="en" href="https://ocrreceipt.com/">', false)
                ->assertSee('<link rel="alternate" hreflang="fr" href="https://ocrreceipt.com/fr">', false);
        }
    }

    public function test_no_js_fallback_links_to_downloads_and_support(): void
    {
        foreach (['/', '/fr'] as $url) {
            $this->get($url)
                ->assertSee('<noscript>', false)
                ->assertSee('href="/dl/macos"', false)
                ->assertSee('href="/dl/windows"', false)
                ->assertSee('href="/dl/linux"', false)
                ->assertSee('mailto:support@ocrreceipt.com', false);
        }
    }

    public function test_french_json_ld_description_is_not_html_escaped(): void
    {
        $html = $this->get('/fr')->getContent();
        preg_match('#<script type="application/ld\+json">(.*?)</script>#s', $html, $m);

        $this->assertNotEmpty($m, 'JSON-LD block missing');
        $this->assertStringContainsString("L'IA", $m[1]);
        $this->assertStringNotContainsString('L&#039;IA', $m[1]);
        $this->assertNotNull(json_decode($m[1]), 'JSON-LD must be valid JSON');
    }
}
