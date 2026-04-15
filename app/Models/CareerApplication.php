<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'linkedin',
        'role', 'department', 'cv_path', 'cover_note',
        'extra_data', 'read_at',
    ];

    protected $casts = [
        'extra_data' => 'array',
        'read_at'    => 'datetime',
    ];
}
