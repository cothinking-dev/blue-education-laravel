<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OgImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Blue Education Marketing Site Routes
|--------------------------------------------------------------------------
|
| Nested URL structure matching wireframe hierarchy.
| Route metadata ('label') used for auto-breadcrumb generation.
|
*/

// Home
Route::get('/', HomeController::class)->name('home')->defaults('label', 'Home');

// Services — Education
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [PageController::class, 'show'])->name('index')->defaults('label', 'Services');

    Route::prefix('education')->name('education.')->group(function () {
        Route::get('/', [PageController::class, 'show'])->name('index')->defaults('label', 'Education');
        Route::get('/school', [PageController::class, 'show'])->name('school')->defaults('label', 'School Programs');
        Route::get('/english', [PageController::class, 'show'])->name('english')->defaults('label', 'English & Foundation');
        Route::get('/vet-tafe', [PageController::class, 'show'])->name('vet-tafe')->defaults('label', 'VET & TAFE');
        Route::get('/degrees', [PageController::class, 'show'])->name('degrees')->defaults('label', 'Undergraduate & Postgraduate');
    });

    // Services — Migration
    Route::prefix('migration')->name('migration.')->group(function () {
        Route::get('/', [PageController::class, 'show'])->name('index')->defaults('label', 'Migration');
        Route::get('/student-visas', [PageController::class, 'show'])->name('student-visas')->defaults('label', 'Student Visas');
        Route::get('/graduate-work', [PageController::class, 'show'])->name('graduate-work')->defaults('label', 'Graduate & Work Visas');
        Route::get('/permanent-residence', [PageController::class, 'show'])->name('permanent-residence')->defaults('label', 'Permanent Residence');
    });

    // Services — Career & Student Support
    Route::get('/career', [PageController::class, 'show'])->name('career')->defaults('label', 'Career Services');
    Route::get('/student-support', [PageController::class, 'show'])->name('student-support')->defaults('label', 'Student Support');
    Route::get('/oshc', [PageController::class, 'show'])->name('oshc')->defaults('label', 'OSHC');
});

// Programs
Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/', [PageController::class, 'show'])->name('index')->defaults('label', 'Programs');
    Route::get('/buddy-programme', [PageController::class, 'show'])->name('buddy-programme')->defaults('label', 'Buddy Programme');
    Route::get('/study-tours', [PageController::class, 'show'])->name('study-tours')->defaults('label', 'Study Tours');

    Route::get('/executive-internship', [PageController::class, 'show'])->name('executive-internship')->defaults('label', 'Executive Internship');
});

// About
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', [PageController::class, 'show'])->name('index')->defaults('label', 'About');
    Route::get('/team', [PageController::class, 'show'])->name('team')->defaults('label', 'Our Team');
    Route::get('/partners', PartnerController::class)->name('partners')->defaults('label', 'Our Partners');
    Route::get('/scsa-partnership', [PageController::class, 'show'])->name('scsa-partnership')->defaults('label', 'SCSA Partnership');
});

// Why Australia
Route::get('/why-australia', [PageController::class, 'show'])->name('why-australia')->defaults('label', 'Why Australia');

// Resources
Route::get('/faq', FaqController::class)->name('faq')->defaults('label', 'FAQ');
Route::get('/admission-requirements', [PageController::class, 'show'])->name('admission-requirements')->defaults('label', 'Admission Requirements');
Route::get('/fees', [PageController::class, 'show'])->name('fees')->defaults('label', 'Fees & Costs');

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index')->defaults('label', 'Blog');
    Route::get('/{post:slug}', [BlogController::class, 'show'])->name('show')->defaults('label', 'Article');
});

// Contact
Route::get('/contact', [PageController::class, 'show'])->name('contact')->defaults('label', 'Contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit')->middleware('throttle:5,1');

// Legal
Route::get('/privacy', [PageController::class, 'show'])->name('privacy')->defaults('label', 'Privacy Policy');
Route::get('/terms', [PageController::class, 'show'])->name('terms')->defaults('label', 'Terms of Use');

// Sitemap & Robots
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', RobotsController::class);

// Dynamic OG Image — e.g. /og-image/services/education
Route::get('/og-image/{path?}', OgImageController::class)
    ->where('path', '.*')
    ->name('og-image');
