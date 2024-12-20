<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $table = 'resource';

    public function category()
    {
        return $this->belongsTo(ResourceCategory::class, 'resource_category_id');
    }
}
