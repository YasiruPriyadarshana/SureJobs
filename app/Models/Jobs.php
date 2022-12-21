<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Employer;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable=[
        'employer_id',
        'title',
        'type',
        'position',
        'description',
        'salary_range'
    ];

    /**
     * Get the employer/company that owns the job.
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    
}
