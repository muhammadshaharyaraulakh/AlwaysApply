<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'title', 'company', 'jobType', 'location', 
        'start_month', 'start_year', 'end_month', 'end_year', 
        'description', 'user_id'
    ];
}
