<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Regression guard for /download-file/{filename}.
 *
 * History: serveFile() used to write a ~100-byte text placeholder named
 * "*.dmg" / "*.exe" whenever the real artifact was missing, then serve it with
 * response()->download(). Visitors downloaded a 98-byte file that the OS
 * presented as a corrupt installer, and the Sparkle auto-updater advertised the
 * same URL with length="243864053". A missing artifact must fail loudly (404),
 * never silently become a fake download.
 */
class DownloadServeTest extends TestCase
{
    private function path(string $name): string
    {
        return storage_path('app/downloads/' . $name);
    }

    private function forget(string $name): void
    {
        $path = $this->path($name);
        if (is_file($path)) {
            unlink($path);
        }
    }

    public function test_missing_artifact_returns_404_and_writes_nothing(): void
    {
        $name = 'OCR-Receipt-1.0.0-missing-fixture.dmg';
        $this->forget($name);

        $response = $this->get('/download-file/' . $name);

        $response->assertStatus(404);
        $this->assertFileDoesNotExist(
            $this->path($name),
            'serveFile() must never synthesise a placeholder artifact.'
        );
    }

    public function test_response_is_not_a_fabricated_placeholder(): void
    {
        $name = 'OCR-Receipt-1.0.0-guard.exe';
        $this->forget($name);

        $response = $this->get('/download-file/' . $name);

        // Old behaviour: 200 + body "OCR Receipt desktop application package placeholder ..."
        $response->assertStatus(404);
        $this->assertStringNotContainsString(
            'placeholder',
            $response->getContent(),
            'The missing-artifact path must not answer with placeholder text.'
        );
    }

    public function test_existing_artifact_is_served_verbatim(): void
    {
        $name = 'OCR-Receipt-1.0.0-real-fixture.bin';
        $this->forget($name);
        file_put_contents($this->path($name), 'REAL-INSTALLER-BYTES');

        try {
            $response = $this->get('/download-file/' . $name);

            $response->assertOk();
            $response->assertDownload($name);
            $this->assertSame('REAL-INSTALLER-BYTES', file_get_contents($this->path($name)));
        } finally {
            $this->forget($name);
        }
    }
}
