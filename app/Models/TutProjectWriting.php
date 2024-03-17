<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutProjectWriting extends Model
{
    use HasFactory;

    protected $table = 'tut_project_writing';

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
        'specialty',
        'description',
        'why_hire_me',
    ];


    public function tutor()
    {
        return $this->belongsTo(Tutors::class, 'tut_id', 'id');
    }
}
