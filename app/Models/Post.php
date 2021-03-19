<?php

namespace App\Models;

use App\Models\Category;
use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url_clean', 'content', 'category_id', 'posted'];
    
    /**
     * Get the category associated with the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     /**
     * Get the img associated with the post.
     */
    public function img()
    {
        return $this->hasOne(PostImage::class);
    }

}
