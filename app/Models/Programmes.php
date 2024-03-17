<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'faculty_id',
        'programme_name',
        'programme_levels',
        'programme_status',
    ];
}
