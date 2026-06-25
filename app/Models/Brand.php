<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'company_name',
        'founded_year',
        'image_path',
        'published_at',
    ];
}
