<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorsReviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'tutor_id',
        'tutor_email',
        'rating',
        'comment',
    ];


    public function tutor()
    {
        return $this->belongsTo(Tutors::class);
    }
}
