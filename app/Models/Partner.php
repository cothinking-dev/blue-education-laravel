<?php

namespace App\Models;

use App\Enums\PartnerCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    public const CACHE_KEY = 'partners:all';

    protected $fillable = [
        'name',
        'logo',
        'category',
        'url',
        'description',
        'representative',
        'coverage',
        'is_active',
        'sort_order',
    ];

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'category' => PartnerCategory::class,
            'is_active' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget(self::CACHE_KEY));
        static::deleted(fn () => Cache::forget(self::CACHE_KEY));
    }

    public function logoUrl(): ?string
    {
        if (! $this->logo) {
            return null;
        }

        return Storage::url($this->logo);
    }

    /** @param  Builder<self>  $query */
    public function scopeActive(Builder $query): void
    {
        $query->where('is_active', true);
    }
}
