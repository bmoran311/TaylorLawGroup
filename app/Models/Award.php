<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Award extends Model
{   
    use HasFactory;    
    protected $table = 'award';
    protected $fillable = ['name'];
}
