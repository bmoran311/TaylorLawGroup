<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'careers';

    public function practice_areas() { return $this->belongsToMany(PracticeArea::class, 'career_practice_area')->withTimestamps(); }
}
