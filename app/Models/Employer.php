<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Jobs;

class Employer extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'description',
        'location',
        'image'
    ];

     /**
     * Get the jobs for the employer/company post.
     */
    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
