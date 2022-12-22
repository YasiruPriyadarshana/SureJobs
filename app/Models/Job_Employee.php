<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'job_id'
    ];
}