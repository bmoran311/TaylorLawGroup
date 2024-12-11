<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admission extends Model
{   
    use HasFactory;    
    protected $table = 'admission';
    protected $fillable = ['name'];	

    public function bios()
    {
        return $this->belongsToMany(Bio::class, 'bio_admission')->withTimestamps();
    }
}
