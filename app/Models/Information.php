<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    /**
     * The table associated with the model.
     * (Optional, but good practice since Laravel might try to look for an 'information' table without the 's')
     */
    protected $table = 'informations';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'cover_photo',
        'avatar_photo',
        'resume',
        'professional_headline',
        'availability_status',
        'location',
        'about_me',
        'facebook',
        'linkedin',
        'github',
        'instagram',
    ];

    /**
     * Get the user that owns the information.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
