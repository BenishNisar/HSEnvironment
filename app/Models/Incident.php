<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    protected $fillable = [
        'incident_id',
        'incident_datetime',
        'incident_type',
        'incident_description',
        'location',
        'department',
        'reported_by',
        'witnesses',
        'severity_level',
        'immediate_actions_taken',
        'attachments',
    ];

    protected $casts = [
        'attachments' => 'array', // To handle JSON storage as an array
    ];
}
