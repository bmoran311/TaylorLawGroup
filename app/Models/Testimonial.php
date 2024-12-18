<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;    
    protected $table = 'testimonial';
    
    public function practice_areas() { return $this->belongsToMany(PracticeArea::class, 'testimonial_practice_area')->withTimestamps(); }
    public function bios() { return $this->belongsToMany(Bio::class, 'testimonial_bio')->withTimestamps(); }
}
