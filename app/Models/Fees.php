<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'tma_fee',
        'pp_fee',
        'tutor_fee',
        'cs_fee',
        'npet_fee',
        'agent_fee',
    ];
    
}
