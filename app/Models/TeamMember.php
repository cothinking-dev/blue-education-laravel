<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    /** @use HasFactory<\Database\Factories\TeamMemberFactory> */
    use HasFactory;

    /** @var list<string> */
    protected $fillable = [
        'name',
        'role',
        'photo',
        'bio',
        'credentials',
        'languages',
        'section',
        'region',
        'sort_order',
    ];

    /**
     * Scope to a specific team section.
     *
     * @param  Builder<TeamMember>  $query
     * @return Builder<TeamMember>
     */
    public function scopeSection(Builder $query, string $section): Builder
    {
        return $query->where('section', $section);
    }
}
