<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'bonus',
        'class_per_week',
        'hrs_per_week',
        'days',
        'pref_charges',
        'pay_allowed',
        'duration',
        'price',
        'bname',
        'acc_no',
        'acc_name',
        'name',
        'gender',
        'about_me',
        'event_starting_date',
        'event_ending_date',
        'course_title',
        'course_code'
    ];
}
