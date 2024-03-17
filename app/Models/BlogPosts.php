<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'ref_role',
        'ref_email',
        'post_catid',
        'post_category',
        'post_title',
        'post_imgurl',
        'post_url',
        'post_desc',
    ];

}
