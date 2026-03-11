<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     protected $fillable = [
        'name',
        'email',
        'logo',
        'location',
        'description'
    ];
    public function Alljob(){
        return $this->hasMany(Alljob::class);
    }
}
