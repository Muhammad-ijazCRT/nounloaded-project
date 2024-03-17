<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'programme',
        'level',
        'course_name',
        'course_code',
        'course_status',
        'course_fee',
        'course_units',
    ];
}
