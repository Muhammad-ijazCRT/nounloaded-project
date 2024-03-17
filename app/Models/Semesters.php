<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semesters extends Model {
    
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'programme',
        'level',
        'courses',
        'semester_no',
        'semester_fees',
        'exam_fees',
        'semester_status',
    ];

}
