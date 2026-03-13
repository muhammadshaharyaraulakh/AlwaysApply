<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
     protected $fillable = [
        'name',
        'institute',
        'start',
        'completed',
        'description',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
