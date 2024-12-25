<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'author_id',
        'category_id',
        'tags',
        'published_at',
        'status',
        'image', // Add this field
    ];
}
