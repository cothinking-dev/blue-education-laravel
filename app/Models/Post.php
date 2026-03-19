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
        static::saved(fn () => Cache::forget('sitemap:xml'));
        static::deleted(fn () => Cache::forget('sitemap:xml'));
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

    /** @var list<string> Safe HTML tags allowed in rendered blog content. */
    private const ALLOWED_TAGS = '<p><br><strong><b><em><i><u><a><ul><ol><li><h2><h3><h4><h5><h6><blockquote><pre><code><img><figure><figcaption><table><thead><tbody><tr><th><td><hr><span><div><sub><sup>';

    /** Body with unsafe HTML tags stripped. */
    protected function sanitizedBody(): Attribute
    {
        return Attribute::get(fn () => strip_tags($this->body, self::ALLOWED_TAGS));
    }

    /** Meta description: excerpt with fallback to truncated body. */
    protected function seoDescription(): Attribute
    {
        return Attribute::get(fn () => $this->excerpt ?: Str::limit(strip_tags($this->body), 160));
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
