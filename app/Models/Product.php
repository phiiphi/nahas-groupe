<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [  //'course_code', 'level', 'semester',
        'price',
        'location',
        'description',
        'status',
        'details',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
    ];
}
