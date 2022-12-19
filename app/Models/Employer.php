<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends User
{
    use HasFactory;

    protected $fillable=[
        'description',
        'location'
    ];
}
