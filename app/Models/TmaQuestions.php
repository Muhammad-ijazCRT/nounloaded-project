<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmaQuestions extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'course',
        'semester',
        'doctype',
        'tmatype',
        'tma_document',
        'document_ext',
        'document_text',
    ];

}
