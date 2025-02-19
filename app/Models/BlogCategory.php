<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
    protected $fillable = ['name', 'sort_order'];	

    public function blog_posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
