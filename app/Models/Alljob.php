<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alljob extends Model
{
       protected $fillable = [
        'title',
        'status',
        'summary',
        'responsibilities',
        'qualifications',
        'preferred_skills',
        'education',
        'minimum_salary',
        'maximum_salary',
        'salary_type',
        'job_type',
        'work_placement',
        'seniority_level',
        'application_deadline',
        'company_id'
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'qualifications' => 'array',
        'preferred_skills' => 'array',
        'application_deadline' => 'date',
    ];
    public function company(){
        return $this->belongsTo(Company::class);
    }

}
