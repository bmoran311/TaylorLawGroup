<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PracticeArea extends Model
{   
    use HasFactory;    
    protected $table = 'practice_area';
    protected $fillable = ['name'];	
}
