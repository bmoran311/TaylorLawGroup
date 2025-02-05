<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'message',
    ];
}