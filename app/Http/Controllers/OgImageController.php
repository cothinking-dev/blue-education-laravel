<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Geometry\Factories\LineFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Typography\FontFactory;

class OgImageController extends Controller
{
    private const WIDTH = 1200;

    private const HEIGHT = 630;

    public function __invoke(Request $request): Response|RedirectResponse
    {
        if (! extension_loaded('gd')) {
            return redirect(asset('brand/logo-og.png'));
        }

        $title = $request->query('title', config('seo.defaults.title'));
        $subtitle = $request->query('subtitle', '');

        $manager = new ImageManager(new GdDriver);

        $image = $this->buildImage($manager, $title, $subtitle);

        return response($image->toPng()->toString(), 200)
            ->header('Content-Type', 'image/png');
    }

    private function buildImage(ImageManager $manager, string $title, string $subtitle): ImageInterface
    {
        $image = $manager->create(self::WIDTH, self::HEIGHT);

        // Blue gradient background (primary-800 → primary-950)
        $this->drawGradientBackground($image);

        // Subtle texture overlay (dot grid + diagonal lines)
        $this->drawTexture($image);

        // Place the Blue Education logo
        $this->placeLogo($image, $manager);

        // Draw a subtle divider line
        $image->drawLine(function (LineFactory $line) {
            $line->from(80, 340);
            $line->to(400, 340);
            $line->color('rgba(255, 255, 255, 0.3)');
            $line->width(2);
        });

        // Draw the page title
        $this->drawTitle($image, $title);

        // Draw subtitle if provided
        if ($subtitle) {
            $this->drawSubtitle($image, $subtitle);
        }

        // Draw the domain at bottom
        $this->drawDomain($image);

        return $image;
    }

    private function drawGradientBackground(ImageInterface $image): void
    {
        // Simulate a vertical gradient from primary-800 (#1e3a8a) to primary-950 (#0f1d3a)
        // by drawing horizontal lines with interpolated colors
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

    private function drawTexture(ImageInterface $image): void
    {
        // Draw subtle dot grid pattern
        $dotSpacing = 40;
        for ($x = 20; $x < self::WIDTH; $x += $dotSpacing) {
            for ($y = 20; $y < self::HEIGHT; $y += $dotSpacing) {
                $image->drawCircle($x, $y, function ($circle) {
                    $circle->radius(1);
                    $circle->background('rgba(255, 255, 255, 0.06)');
                });
            }
        }

        // Draw subtle diagonal lines
        for ($i = -self::HEIGHT; $i < self::WIDTH + self::HEIGHT; $i += 80) {
            $image->drawLine(function (LineFactory $line) use ($i) {
                $line->from($i, 0);
                $line->to($i + self::HEIGHT, self::HEIGHT);
                $line->color('rgba(255, 255, 255, 0.03)');
                $line->width(1);
            });
        }
    }

    private function placeLogo(ImageInterface $image, ImageManager $manager): void
    {
        $logoPath = public_path('brand/logo.png');

        if (! file_exists($logoPath)) {
            return;
        }

        $logo = $manager->read($logoPath);

        // Scale logo to fit nicely — target ~260px wide
        $logo->scaleDown(width: 260);

        // Invert to white: since logo is dark on transparent, brighten it
        $logo->brightness(100);

        // Place at top-left area with padding
        $image->place($logo, 'top-left', 80, 80);
    }

    private function drawTitle(ImageInterface $image, string $title): void
    {
        $fontPath = resource_path('fonts/Inter-Bold.ttf');

        // Word-wrap the title to fit within the image
        $wrappedTitle = $this->wordWrap($title, 28);

        $image->text($wrappedTitle, 80, 380, function (FontFactory $font) use ($fontPath) {
            $font->filename($fontPath);
            $font->size(52);
            $font->color('rgba(255, 255, 255, 0.95)');
            $font->lineHeight(1.3);
            $font->align('left');
            $font->valign('top');
        });
    }

    private function drawSubtitle(ImageInterface $image, string $subtitle): void
    {
        $fontPath = resource_path('fonts/Inter-Regular.ttf');

        $image->text($subtitle, 80, 520, function (FontFactory $font) use ($fontPath) {
            $font->filename($fontPath);
            $font->size(24);
            $font->color('rgba(255, 255, 255, 0.65)');
            $font->align('left');
            $font->valign('top');
        });
    }

    private function drawDomain(ImageInterface $image): void
    {
        $fontPath = resource_path('fonts/Inter-Medium.ttf');

        $image->text('blueeducation.com.au', self::WIDTH - 80, self::HEIGHT - 40, function (FontFactory $font) use ($fontPath) {
            $font->filename($fontPath);
            $font->size(18);
            $font->color('rgba(255, 255, 255, 0.45)');
            $font->align('right');
            $font->valign('bottom');
        });
    }

    private function wordWrap(string $text, int $maxCharsPerLine): string
    {
        return wordwrap($text, $maxCharsPerLine, "\n", true);
    }
}
