<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customs extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'type',
        'data',
        'status'
    ];
}
