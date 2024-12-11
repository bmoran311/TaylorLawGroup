<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{   
    use HasFactory;    
    protected $table = 'license';
    protected $fillable = ['name'];

    public function bios()
    {
        return $this->belongsToMany(Bio::class, 'bio_license')->withTimestamps();
    }
}
