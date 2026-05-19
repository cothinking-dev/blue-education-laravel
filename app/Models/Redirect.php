<?php

namespace App\Models;

use Database\Factories\RedirectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    /** @use HasFactory<RedirectFactory> */
    use HasFactory;

    /** @var list<string> */
    protected $fillable = [
        'from_path',
        'to_path',
        'status_code',
        'enabled',
        'hits',
        'last_hit_at',
        'source',
        'notes',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'enabled' => 'boolean',
            'status_code' => 'integer',
            'hits' => 'integer',
            'last_hit_at' => 'datetime',
        ];
    }

    /**
     * Normalise a request path for matching: leading slash, no trailing slash,
     * no query string, no fragment, lowercased.
     */
    public static function normalisePath(string $path): string
    {
        $path = trim(rawurldecode($path));
        $path = mb_strtolower($path, 'UTF-8');

        if ($path === '' || $path === '/') {
            return '/';
        }

        $path = strtok($path, '?');
        $path = strtok($path, '#');

        if (! str_starts_with($path, '/')) {
            $path = '/'.$path;
        }

        return rtrim($path, '/');
    }
}
