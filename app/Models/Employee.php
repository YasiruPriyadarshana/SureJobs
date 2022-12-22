<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Jobs;
use App\Models\User;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'mobile',
        'address',
        'nic',
        'cv'
    ];

    //Get all jobs that employee applied.
    public function jobs()
    {
        return $this->belongsToMany(Jobs::class, 'job__employees');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
