<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{   
    use HasFactory;    
    protected $table = 'news';
    protected $fillable = ['headline'];	

    public function bios()
    {
        return $this->belongsToMany(Bio::class, 'bio_news')->withTimestamps();
    }
}
