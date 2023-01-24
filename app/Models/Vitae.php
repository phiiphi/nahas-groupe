<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitae extends Model
{
    use HasFactory;

    protected $fillable = [  //'course_code', 'level', 'semester',
        'name',
        'email',
        'phone',
        'message',
        'cv',
    ];
}
