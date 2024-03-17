<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'community_posts';

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
        // You may exclude the following two fields if you don't want to allow mass assignment for timestamps
        // 'created_at',
        // 'updated_at',
    ];


    public function category()
    {
        return $this->belongsTo(CommunityCategory::class, 'post_catid', 'id');
    }
}
