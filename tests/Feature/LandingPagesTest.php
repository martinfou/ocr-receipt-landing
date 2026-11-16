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
            ->assertSee('Vos reçus, votre ordi, votre logiciel.', false);
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
        $this->assertStringContainsString("cartes d'affaires", $m[1]);
        $this->assertStringNotContainsString('&#039;', $m[1]);
        $this->assertNotNull(json_decode($m[1]), 'JSON-LD must be valid JSON');
    }

    public function test_landing_pages_ship_prerendered_text_for_crawlers(): void
    {
        $this->get('/')
            ->assertSee('data-prerendered', false)
            ->assertSee('Two plans. Neither is a subscription.', false)
            ->assertSee('What happens if you get hit by a bus?', false);

        $this->get('/fr')
            ->assertSee('data-prerendered', false)
            ->assertSee('Deux forfaits. Aucun abonnement.', false)
            ->assertDontSee('Two plans. Neither is a subscription.', false);
    }

    public function test_landing_pages_have_faq_structured_data_and_social_cards(): void
    {
        foreach (['/' => 'en', '/fr' => 'fr'] as $url => $lang) {
            $html = $this->get($url)->getContent();
            preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $m);
            $types = array_map(fn ($json) => json_decode($json, true)['@type'] ?? null, $m[1]);

            $this->assertContains('FAQPage', $types, "$url has no FAQPage JSON-LD");
            $this->assertStringContainsString('name="twitter:card" content="summary_large_image"', $html);
            $this->assertStringContainsString("og-landing-$lang.png", $html);
        }
    }
}
