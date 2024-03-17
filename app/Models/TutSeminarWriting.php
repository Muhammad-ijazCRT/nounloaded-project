<?php

namespace App\Models;

use App\Http\Middleware\Tutor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutSeminarWriting extends Model
{
    use HasFactory;
    protected $table = 'tut_seminar_writing';

    protected $fillable = [
        'tut_id',
        'documentFormat',
        'price',
        'msWord',
        'powerPoint',
        'pageLength',
        'abstract',
        'proposal',
        'questionnaires',
        'updateOfReferencing',
        'preliminaryPage',
        'chaptersToDeliver',
        'readyIn',
        'dataAnalysis',
        'plagiarism',
        'supportCorrections',
        'meansOfDelivering',
    ];

    
    public function tutor()
    {
        return $this->belongsTo(Tutors::class, 'tut_id', 'id');
    }
}
