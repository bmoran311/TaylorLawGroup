<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bio extends Model
{   
    use HasFactory;    
    protected $table = 'bio';
    protected $fillable = ['first_name', 'middle_initial', 'last_name', 'email'];   

    public function language() { return $this->belongsTo(Language::class); }
    public function level() { return $this->belongsTo(Level::class); }
    public function awards() { return $this->hasMany(Award::class); }
    public function licenses() { return $this->hasMany(License::class); }
    public function memberships() { return $this->hasMany(Membership::class); }
    public function admissions() { return $this->hasMany(Admission::class); }
    public function education() { return $this->hasMany(Education::class); }
    public function practiceAreas() { return $this->hasMany(PracticeArea::class); }
    public function news() { return $this->hasMany(News::class); }
    public function engagements() { return $this->hasMany(Engagement::class); }
    public function multimedia() { return $this->hasMany(Multimedia::class); }
}