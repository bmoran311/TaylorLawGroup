<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Firm extends Model
{   
    use HasFactory;    
    protected $table = 'firm';
    protected $fillable = ['name'];	
}
