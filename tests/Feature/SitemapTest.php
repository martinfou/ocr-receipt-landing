<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitemapTest extends TestCase
{
    /**
     * Le bug d'origine : la ligne 1 de sitemap.blade.php commencait par
     * "<?xml ...", que PHP lit comme une balise ouvrante courte, ce qui
     * produisait un ParseError et un HTTP 500 en production.
     */
    public function test_sitemap_returns_http_200(): void
    {
        $this->get('/sitemap.xml')->assertStatus(200);
    }

    public function test_sitemap_is_well_formed_xml(): void
    {
        $body = $this->get('/sitemap.xml')->getContent();

        $this->assertStringStartsWith('<?xml version="1.0" encoding="UTF-8"?>', $body);

        $doc = @simplexml_load_string($body);

        $this->assertNotFalse($doc, 'Le sitemap doit etre du XML bien forme');
        $this->assertSame('urlset', $doc->getName());
    }

    public function test_sitemap_lists_the_canonical_pages(): void
    {
        $body = $this->get('/sitemap.xml')->getContent();

        $this->assertStringContainsString('<loc>https://ocrreceipt.com/</loc>', $body);
        $this->assertStringContainsString('https://ocrreceipt.com/alternative-hubdoc', $body);
        $this->assertStringContainsString('https://ocrreceipt.com/fr', $body);

        $urls = substr_count($body, '<url>');
        $this->assertGreaterThanOrEqual(3, $urls, 'Le sitemap doit lister au moins 3 pages');
    }

    public function test_robots_declares_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString(
            'Sitemap: https://ocrreceipt.com/sitemap.xml',
            $robots,
            'robots.txt doit declarer le sitemap pour que les crawlers le trouvent'
        );
    }
}
