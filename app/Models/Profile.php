<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'coverImage',
        'profileImage',
        'name',
        'email',
        'phone',
        'address',
        'ProfessionalHeadline',
        'status',
        'location',
        'facebook',
        'linkedin',
        'github',
        'instagram',
        'resume',
        'user_id'
    ];

    // Relation: Profile belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}