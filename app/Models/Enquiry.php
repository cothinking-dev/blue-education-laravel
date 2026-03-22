<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    /** @use HasFactory<\Database\Factories\EnquiryFactory> */
    use HasFactory;

    /** @var list<string> */
    public const ENQUIRY_TYPES = ['Education', 'Migration', 'Career', 'Student Support', 'Other'];

    /** @var list<string> */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'country',
        'enquiry_type',
        'message',
    ];
}
