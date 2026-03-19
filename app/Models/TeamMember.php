<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    /** @use HasFactory<\Database\Factories\TeamMemberFactory> */
    use HasFactory, SoftDeletes;

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
        'team_type',
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

    /**
     * Scope to a specific team type.
     *
     * @param  Builder<TeamMember>  $query
     * @return Builder<TeamMember>
     */
    public function scopeTeamType(Builder $query, string $type): Builder
    {
        return $query->where('team_type', $type);
    }
}
