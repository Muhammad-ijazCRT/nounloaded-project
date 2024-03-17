<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutCoursesPrice extends Model
{
    use HasFactory;

    protected $table =  'tut_courses_prices';

    protected $fillable = [
        'bsc_per_day_1', 'bsc_per_day_2', 'bsc_per_day_3', 'bsc_per_week_1', 'bsc_per_week_2', 'bsc_per_week_3', 'bsc_per_week_4',
        'master_per_day_1', 'master_per_day_2', 'master_per_day_3', 'master_per_week_1', 'master_per_week_2', 'master_per_week_3', 'master_per_week_4', 'tut_id',
        'bname',
        'acc_no',
        'acc_name',
    ];
}
