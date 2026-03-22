<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, SoftDeletes;

    /** @var list<string> */
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'is_featured',
        'is_published',
        'published_at',
        'read_time',
    ];

    protected static function booted(): void
    {
        static::saved(function (): void {
            Cache::forget('sitemap:xml');
            Cache::forget('home:latest-posts');
        });
        static::deleted(function (): void {
            Cache::forget('sitemap:xml');
            Cache::forget('home:latest-posts');
        });
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    /**
     * Only resolve published posts for public route model binding.
     *
     * @param  mixed  $value
     * @param  string|null  $field
     */
    public function resolveRouteBinding($value, $field = null): ?self
    {
        return $this->where($field ?? 'id', $value)->published()->first();
    }

    /** Body with unsafe HTML stripped via allowlist sanitizer. */
    protected function sanitizedBody(): Attribute
    {
        return Attribute::get(fn () => self::sanitizeHtml($this->body));
    }

    /**
     * Sanitize HTML with a strict allowlist of tags and safe attributes.
     */
    public static function sanitizeHtml(?string $html): string
    {
        if ($html === null || $html === '') {
            return '';
        }

        $config = (new HtmlSanitizerConfig)
            ->allowElement('p')
            ->allowElement('br')
            ->allowElement('strong')
            ->allowElement('b')
            ->allowElement('em')
            ->allowElement('i')
            ->allowElement('u')
            ->allowElement('a', ['href'])
            ->allowElement('ul')
            ->allowElement('ol')
            ->allowElement('li')
            ->allowElement('h2')
            ->allowElement('h3')
            ->allowElement('h4')
            ->allowElement('h5')
            ->allowElement('h6')
            ->allowElement('blockquote')
            ->allowElement('pre')
            ->allowElement('code')
            ->allowElement('img', ['src', 'alt', 'width', 'height'])
            ->allowElement('figure')
            ->allowElement('figcaption')
            ->allowElement('table')
            ->allowElement('thead')
            ->allowElement('tbody')
            ->allowElement('tr')
            ->allowElement('th')
            ->allowElement('td')
            ->allowElement('hr')
            ->allowElement('span')
            ->allowElement('div')
            ->allowElement('sub')
            ->allowElement('sup')
            ->allowMediaSchemes(['https'])
            ->allowLinkSchemes(['https', 'http', 'mailto']);

        return (new HtmlSanitizer($config))->sanitize($html);
    }

    /** Meta description: excerpt with fallback to truncated body. */
    protected function seoDescription(): Attribute
    {
        return Attribute::get(fn () => $this->excerpt ?: Str::limit(strip_tags($this->body), 155));
    }

    /** Absolute URL to featured image for OG tags. */
    protected function seoImage(): Attribute
    {
        return Attribute::get(fn () => $this->featured_image ? asset($this->featured_image) : null);
    }

    /**
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope to only published posts.
     *
     * @param  Builder<Post>  $query
     * @return Builder<Post>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
            ->where('published_at', '<=', now());
    }

    /**
     * Scope to only featured posts.
     *
     * @param  Builder<Post>  $query
     * @return Builder<Post>
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }
}
