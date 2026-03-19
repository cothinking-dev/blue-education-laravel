<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route as RouteFacade;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Geometry\Factories\CircleFactory;
use Intervention\Image\Geometry\Factories\LineFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Typography\FontFactory;

class OgImageController extends Controller
{
    private const WIDTH = 1200;

    private const HEIGHT = 630;

    public function __invoke(string $path = ''): Response|RedirectResponse
    {
        if (! extension_loaded('gd')) {
            return redirect(asset('brand/logo-og.png'));
        }

        $cacheKey = md5($path);
        $cachePath = "public/og-images/{$cacheKey}.png";

        if (Storage::exists($cachePath)) {
            return response(Storage::get($cachePath), 200)
                ->header('Content-Type', 'image/png')
                ->header('Cache-Control', 'public, max-age=86400');
        }

        $title = $this->resolveTitleFromPath($path);

        $manager = new ImageManager(new GdDriver);
        $image = $this->buildImage($manager, $title);

        $png = $image->toPng()->toString();

        Storage::makeDirectory('public/og-images');
        Storage::put($cachePath, $png);

        return response($png, 200)
            ->header('Content-Type', 'image/png')
            ->header('Cache-Control', 'public, max-age=86400');
    }

    /**
     * Resolve the page title from its route path using route label defaults.
     */
    private function resolveTitleFromPath(string $path): string
    {
        $normalizedPath = '/'.trim($path, '/');

        // Match against registered routes to find the label
        $routes = collect(RouteFacade::getRoutes()->getRoutes());

        $matched = $routes->first(function (\Illuminate\Routing\Route $route) use ($normalizedPath) {
            return '/'.trim($route->uri(), '/') === $normalizedPath
                && in_array('GET', $route->methods());
        });

        if ($matched && $label = $matched->defaults['label'] ?? null) {
            return $label;
        }

        // Fallback: humanize the last path segment
        if ($path && $path !== '/') {
            $lastSegment = last(explode('/', trim($path, '/')));

            return str($lastSegment)->replace('-', ' ')->title()->toString();
        }

        return config('seo.defaults.title');
    }

    private function buildImage(ImageManager $manager, string $title): ImageInterface
    {
        $image = $manager->create(self::WIDTH, self::HEIGHT);

        $this->drawGradientBackground($image);
        $this->drawTopoTexture($image);
        $this->placeLogo($image, $manager);

        // Subtle divider line
        $image->drawLine(function (LineFactory $line) {
            $line->from(80, 340);
            $line->to(400, 340);
            $line->color('rgba(255, 255, 255, 0.3)');
            $line->width(2);
        });

        $this->drawTitle($image, $title);
        $this->drawDomain($image);

        return $image;
    }

    private function drawGradientBackground(ImageInterface $image): void
    {
        // Vertical gradient from primary-800 (#1e3a8a) to primary-950 (#0f1d3a)
        $startR = 30;
        $startG = 58;
        $startB = 138;
        $endR = 15;
        $endG = 29;
        $endB = 58;

        for ($y = 0; $y < self::HEIGHT; $y++) {
            $ratio = $y / self::HEIGHT;
            $r = (int) round($startR + ($endR - $startR) * $ratio);
            $g = (int) round($startG + ($endG - $startG) * $ratio);
            $b = (int) round($startB + ($endB - $startB) * $ratio);

            $image->drawLine(function (LineFactory $line) use ($y, $r, $g, $b) {
                $line->from(0, $y);
                $line->to(self::WIDTH, $y);
                $line->color("rgb({$r}, {$g}, {$b})");
                $line->width(1);
            });
        }
    }

    /**
     * Draw a dot grid texture overlay at 10% opacity.
     */
    private function drawTopoTexture(ImageInterface $image): void
    {
        $spacing = 30;
        $color = 'rgba(255, 255, 255, 0.10)';

        for ($x = $spacing; $x < self::WIDTH; $x += $spacing) {
            for ($y = $spacing; $y < self::HEIGHT; $y += $spacing) {
                $image->drawCircle($x, $y, function (CircleFactory $circle) use ($color) {
                    $circle->radius(2);
                    $circle->background($color);
                });
            }
        }
    }

    private function placeLogo(ImageInterface $image, ImageManager $manager): void
    {
        $logoPath = public_path('brand/logo.png');

        if (! file_exists($logoPath)) {
            return;
        }

        $logo = $manager->read($logoPath);
        $logo->scaleDown(width: 260);
        $logo->brightness(100);

        $image->place($logo, 'top-left', 80, 80);
    }

    private function drawTitle(ImageInterface $image, string $title): void
    {
        $fontPath = resource_path('fonts/Inter-Bold.ttf');
        $wrappedTitle = wordwrap($title, 28, "\n", true);

        $image->text($wrappedTitle, 80, 380, function (FontFactory $font) use ($fontPath) {
            $font->filename($fontPath);
            $font->size(52);
            $font->color('rgba(255, 255, 255, 0.95)');
            $font->lineHeight(1.3);
            $font->align('left');
            $font->valign('top');
        });
    }

    private function drawDomain(ImageInterface $image): void
    {
        $fontPath = resource_path('fonts/Inter-Medium.ttf');

        $domain = parse_url(config('seo.organization.url'), PHP_URL_HOST) ?? 'blueeducation.com.au';

        $image->text($domain, self::WIDTH - 80, self::HEIGHT - 40, function (FontFactory $font) use ($fontPath) {
            $font->filename($fontPath);
            $font->size(18);
            $font->color('rgba(255, 255, 255, 0.45)');
            $font->align('right');
            $font->valign('bottom');
        });
    }
}
