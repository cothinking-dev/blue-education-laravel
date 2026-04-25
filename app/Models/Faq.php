<?php

namespace App\Models;

use Database\Factories\FaqFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    /** @use HasFactory<FaqFactory> */
    use HasFactory, SoftDeletes;

    /** @var array<string, string> */
    public const CATEGORIES = [
        'education' => 'Education',
        'migration' => 'Migration',
        'career' => 'Career',
        'support' => 'Support',
        'fees' => 'Fees',
    ];

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
