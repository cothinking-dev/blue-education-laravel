<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /** @use HasFactory<\Database\Factories\PartnerFactory> */
    use HasFactory;

    /** @var array<string, string> */
    public const TYPES = [
        'university' => 'University',
        'tafe' => 'TAFE',
    ];

    /** @var list<string> */
    protected $fillable = [
        'name',
        'logo',
        'type',
        'url',
        'sort_order',
    ];

    /**
     * Scope to a specific partner type.
     *
     * @param  Builder<Partner>  $query
     * @return Builder<Partner>
     */
    public function scopeType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }
}
