<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'city',
        'position',
        'resume_path',
        'additional',
    ];
}
