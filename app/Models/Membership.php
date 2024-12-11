<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{   
    use HasFactory;    
    protected $table = 'membership';
    protected $fillable = ['name'];

    public function memberships()
    {
        return $this->belongsToMany(Bio::class, 'bio_membership')->withTimestamps();
    }
}
