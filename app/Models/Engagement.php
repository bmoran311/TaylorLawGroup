<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Engagement extends Model
{   
    use HasFactory;    
    protected $table = 'engagement';
    protected $fillable = ['title'];
    
    public function bios()
    {
        return $this->belongsToMany(Bio::class, 'bio_engagement')->withTimestamps();
    }
}
