<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutMscMbaProfessional extends Model
{
    use HasFactory;
    protected $table = 'tut_msc_mba_professional';

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
