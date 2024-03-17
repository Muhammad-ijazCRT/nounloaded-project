<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentExamClearanceSlip extends Model
{

    protected $table = 'student_exam_clearance_slip';

    protected $fillable = [
        'student_name',
        'matriculation_no',
        'study_centre',
        'faculty',
        'programme',
        'signature_date',
        'courses', // Assuming you have a column for storing the courses as JSON
    ];
}
