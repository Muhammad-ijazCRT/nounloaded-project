<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGenerateSeminarSlip extends Model
{
    use HasFactory;

    protected $table = 'student_seminar_slips';

    protected $fillable = [
        'student_name',
        'matriculation_no',
        'programme',
        'study_centre',
        'course_code',
        'course_title',
        'level',
        'phone',
        'email',
        'topics', // Assuming 'topics' is the JSON-encoded field for topics
        // Add other fields as needed
    ];
}