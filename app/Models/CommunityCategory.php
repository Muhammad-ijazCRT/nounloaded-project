<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityCategory extends Model
{
    use HasFactory;

    // Explicitly specify the table name
    protected $table = 'community_categories';

    protected $fillable = [
        'category_name',
        'image',
    ];

    public function posts()
    {
        return $this->hasMany(CommunityPost::class, 'post_catid', 'id');
    }
}
