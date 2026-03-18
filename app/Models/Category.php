<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    private const BADGE_COLORS = [
        'bg-primary-500',
        'bg-emerald-500',
        'bg-amber-500',
        'bg-violet-500',
        'bg-rose-500',
        'bg-cyan-500',
        'bg-orange-500',
        'bg-teal-500',
    ];

    /** @var list<string> */
    protected $fillable = [
        'name',
        'slug',
        'sort_order',
    ];

    /**
     * @return HasMany<Post, $this>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Tailwind background class for the category badge, assigned by row ID.
     */
    public function badgeClass(): string
    {
        return self::BADGE_COLORS[$this->id % count(self::BADGE_COLORS)];
    }
}
