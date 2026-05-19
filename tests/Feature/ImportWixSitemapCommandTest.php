<?php

use App\Models\Redirect;

beforeEach(function () {
    $this->tmpFile = tempnam(sys_get_temp_dir(), 'wix-sitemap-').'.xml';
});

afterEach(function () {
    if (file_exists($this->tmpFile)) {
        unlink($this->tmpFile);
    }
});

it('imports URLs from a flat sitemap', function () {
    file_put_contents($this->tmpFile, <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>https://old-blueeducation.wixsite.com/site/services</loc></url>
    <url><loc>https://old-blueeducation.wixsite.com/site/about-us</loc></url>
    <url><loc>https://old-blueeducation.wixsite.com/site/contact-us</loc></url>
</urlset>
XML);

    $this->artisan('redirects:import-wix', [
        'url' => $this->tmpFile,
        '--target' => '/contact',
    ])->assertSuccessful();

    expect(Redirect::count())->toBe(3);
    expect(Redirect::where('from_path', '/site/services')->first())
        ->not->toBeNull()
        ->to_path->toBe('/contact')
        ->source->toBe('wix-import')
        ->status_code->toBe(301)
        ->enabled->toBeTrue();
});

it('skips URLs that already exist', function () {
    Redirect::factory()->create(['from_path' => '/services']);

    file_put_contents($this->tmpFile, <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>https://example.com/services</loc></url>
    <url><loc>https://example.com/about</loc></url>
</urlset>
XML);

    $this->artisan('redirects:import-wix', ['url' => $this->tmpFile])
        ->assertSuccessful();

    expect(Redirect::count())->toBe(2);
});

it('respects the --disabled flag', function () {
    file_put_contents($this->tmpFile, <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>https://example.com/needs-review</loc></url>
</urlset>
XML);

    $this->artisan('redirects:import-wix', [
        'url' => $this->tmpFile,
        '--disabled' => true,
    ])->assertSuccessful();

    expect(Redirect::first()->enabled)->toBeFalse();
});

it('writes nothing in dry-run mode', function () {
    file_put_contents($this->tmpFile, <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>https://example.com/one</loc></url>
    <url><loc>https://example.com/two</loc></url>
</urlset>
XML);

    $this->artisan('redirects:import-wix', [
        'url' => $this->tmpFile,
        '--dry-run' => true,
    ])->assertSuccessful();

    expect(Redirect::count())->toBe(0);
});
