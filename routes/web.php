<?php

use App\Http\Requests\StoreEnquiryRequest;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Post;
use App\Models\TeamMember;
use App\Models\Testimonial;
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
Route::get('/', function () {
    return view('pages.home', [
        'latestPosts' => Post::query()->published()->with('category')->latest('published_at')->limit(3)->get(),
        'testimonials' => Testimonial::query()->active()->orderBy('sort_order')->get(),
    ]);
})->name('home')->defaults('label', 'Home');

// Services — Education
Route::prefix('services')->name('services.')->group(function () {

    Route::prefix('education')->name('education.')->group(function () {
        Route::get('/', function () {
            return view('pages.services.education.index');
        })->name('index')->defaults('label', 'Education');

        Route::get('/school', function () {
            return view('pages.services.education.school');
        })->name('school')->defaults('label', 'School Programs');

        Route::get('/english', function () {
            return view('pages.services.education.english');
        })->name('english')->defaults('label', 'English & Foundation');

        Route::get('/vet-tafe', function () {
            return view('pages.services.education.vet-tafe');
        })->name('vet-tafe')->defaults('label', 'VET & TAFE');

        Route::get('/degrees', function () {
            return view('pages.services.education.degrees');
        })->name('degrees')->defaults('label', 'University Degrees');
    });

    // Services — Migration
    Route::prefix('migration')->name('migration.')->group(function () {
        Route::get('/', function () {
            return view('pages.services.migration.index');
        })->name('index')->defaults('label', 'Migration');

        Route::get('/student-visas', function () {
            return view('pages.services.migration.student-visas');
        })->name('student-visas')->defaults('label', 'Student Visas');

        Route::get('/graduate-work', function () {
            return view('pages.services.migration.graduate-work');
        })->name('graduate-work')->defaults('label', 'Graduate & Work Visas');

        Route::get('/permanent-residence', function () {
            return view('pages.services.migration.permanent-residence');
        })->name('permanent-residence')->defaults('label', 'Permanent Residence');
    });

    // Services — Career & Student Support
    Route::get('/career', function () {
        return view('pages.services.career');
    })->name('career')->defaults('label', 'Career Services');

    Route::get('/student-support', function () {
        return view('pages.services.student-support');
    })->name('student-support')->defaults('label', 'Student Support');
});

// Programs
Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/', function () {
        return view('pages.programs.index');
    })->name('index')->defaults('label', 'Programs');

    Route::get('/buddy-programme', function () {
        return view('pages.programs.buddy-programme');
    })->name('buddy-programme')->defaults('label', 'Buddy Programme');

    Route::get('/study-tours', function () {
        return view('pages.programs.study-tours');
    })->name('study-tours')->defaults('label', 'Study Tours');

    Route::get('/scsa-associate', function () {
        return view('pages.programs.scsa-associate');
    })->name('scsa-associate')->defaults('label', 'SCSA Associate');

    Route::get('/executive-internship', function () {
        return view('pages.programs.executive-internship');
    })->name('executive-internship')->defaults('label', 'Executive Internship');
});

// About
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', function () {
        return view('pages.about.index');
    })->name('index')->defaults('label', 'About');

    Route::get('/team', function () {
        return view('pages.about.team', [
            'australianTeam' => TeamMember::query()->section('Australia')->orderBy('sort_order')->get(),
            'internationalTeam' => TeamMember::query()->section('International')->orderBy('sort_order')->get(),
        ]);
    })->name('team')->defaults('label', 'Our Team');

    Route::get('/partners', function () {
        return view('pages.about.partners');
    })->name('partners')->defaults('label', 'Our Partners');
});

// Why Australia
Route::get('/why-australia', function () {
    return view('pages.why-australia');
})->name('why-australia')->defaults('label', 'Why Australia');

// Resources
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq')->defaults('label', 'FAQ');

Route::get('/admission-requirements', function () {
    return view('pages.admission-requirements');
})->name('admission-requirements')->defaults('label', 'Admission Requirements');

Route::get('/fees', function () {
    return view('pages.fees');
})->name('fees')->defaults('label', 'Fees & Costs');

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', function () {
        return view('pages.blog.index', [
            'featuredPost' => Post::query()->published()->featured()->with('category')->latest('published_at')->first(),
            'posts' => Post::query()->published()->with('category')->latest('published_at')->paginate(9),
            'categories' => Category::query()->orderBy('sort_order')->get(),
        ]);
    })->name('index')->defaults('label', 'Blog');

    Route::get('/{post:slug}', function (App\Models\Post $post) {
        $post->load('category');

        return view('pages.blog.show', [
            'post' => $post,
            'relatedPosts' => Post::query()->published()->with('category')->where('category_id', $post->category_id)->where('id', '!=', $post->id)->latest('published_at')->limit(3)->get(),
        ]);
    })->name('show')->defaults('label', 'Article');
});

// Contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact')->defaults('label', 'Contact');

Route::post('/contact', function (StoreEnquiryRequest $request) {
    Enquiry::create($request->validated());

    return response()->json(['success' => true]);
})->name('contact.submit');

// Legal
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy')->defaults('label', 'Privacy Policy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms')->defaults('label', 'Terms of Use');

// Showcase (dev only)
Route::get('/showcase', function () {
    return view('showcase');
})->name('showcase');
