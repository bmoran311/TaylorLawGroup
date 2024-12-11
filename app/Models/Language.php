<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{   
    use HasFactory;    
    protected $table = 'language';
    protected $fillable = ['name'];

    public function bios()
    {
        return $this->belongsToMany(Bio::class, 'bio_language')->withTimestamps();
    }
}
