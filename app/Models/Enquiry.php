<?php

namespace App\Models;

use Database\Factories\EnquiryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    /** @use HasFactory<EnquiryFactory> */
    use HasFactory, SoftDeletes;

    /** @var list<string> */
    public const ENQUIRY_TYPES = ['Education', 'Migration', 'Career', 'Student Support', 'Other'];

    /** @var array<string, string> */
    public const STATUSES = [
        'new' => 'New',
        'read' => 'Read',
        'replied' => 'Replied',
    ];

    /** @var list<string> */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'country',
        'enquiry_type',
        'message',
        'status',
        'read_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
        ];
    }
}
