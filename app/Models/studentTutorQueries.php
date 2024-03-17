<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentTutorQueries extends Model
{
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'student_tutor_queries';
    protected $fillable = [
        'student_id',
        'tutor_id',
        'class_Category',
        'faculty',
        'programme',
        'level',
        'semester',
        'course',
        'whatsapp_number',
        'email',
        'query_file',
        'desc',
        'file_ext',
        'status'
    ];




    public function tutors()
    {
        return $this->hasMany(Tutors::class, 'id', 'tutor_id');
    }
}
