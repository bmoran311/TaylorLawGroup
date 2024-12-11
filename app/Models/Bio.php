<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bio extends Model
{   
    use HasFactory;    
    protected $table = 'bio';
    protected $fillable = ['first_name', 'middle_initial', 'last_name', 'email'];   

    public function practice_areas() { return $this->belongsToMany(PracticeArea::class, 'bio_practice_area')->withTimestamps(); }
    public function languages() { return $this->belongsToMany(Language::class, 'bio_language')->withTimestamps(); }
    public function levels() { return $this->belongsToMany(Level::class, 'bio_level')->withTimestamps(); }
    public function memberships() { return $this->belongsToMany(Membership::class, 'bio_membership')->withTimestamps(); }
    public function licenses() { return $this->belongsToMany(License::class, 'bio_license')->withTimestamps(); } 
    public function awards() { return $this->belongsToMany(Award::class, 'bio_award')->withTimestamps(); }
    public function education() { return $this->belongsToMany(Education::class, 'bio_education')->withTimestamps(); }
    public function admissions() { return $this->belongsToMany(Admission::class, 'bio_admission')->withTimestamps(); }
    public function news() { return $this->belongsToMany(News::class, 'bio_news')->withTimestamps(); }
    public function engagements() { return $this->belongsToMany(Engagement::class, 'bio_engagement')->withTimestamps(); }
    public function multimedias() { return $this->belongsToMany(Multimedia::class, 'bio_multimedia')->withTimestamps(); }
}