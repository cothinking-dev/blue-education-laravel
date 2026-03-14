<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    /** @use HasFactory<\Database\Factories\FaqFactory> */
    use HasFactory;

    /** @var list<string> */
    protected $fillable = [
        'question',
        'answer',
        'category',
        'sort_order',
    ];

    /**
     * Scope to a specific FAQ category.
     *
     * @param  Builder<Faq>  $query
     * @return Builder<Faq>
     */
    public function scopeCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }
}
