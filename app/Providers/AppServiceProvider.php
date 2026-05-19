<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Redirect;
use App\Models\Testimonial;
use App\Policies\AdminPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use PostHog\Client as PostHogClient;
use PostHog\PostHog;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PostHogClient::class, function (): PostHogClient {
            $token = (string) config('posthog.token');
            $host = (string) config('posthog.host');

            PostHog::init($token, ['host' => $host]);

            return new PostHogClient($token, ['host' => $host]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Post::class, AdminPolicy::class);
        Gate::policy(Category::class, AdminPolicy::class);
        Gate::policy(Faq::class, AdminPolicy::class);
        Gate::policy(Testimonial::class, AdminPolicy::class);
        Gate::policy(Enquiry::class, AdminPolicy::class);
        Gate::policy(Partner::class, AdminPolicy::class);
        Gate::policy(Redirect::class, AdminPolicy::class);
    }
}
