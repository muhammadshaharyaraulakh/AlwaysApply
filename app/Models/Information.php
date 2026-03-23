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
    public function addCover(Request $request) { $request->validate([ 'coverImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', ]); $user_id = Auth::id(); $profile = Profile::where('user_id', $user_id)->first(); if ($request->hasFile('coverImage')) { $file = $request->file('coverImage'); // 1. Generate a unique name $filename = 'cover_' . $user_id . '_' . time() . '.' . $file->getClientOriginalExtension(); // 2. Upload the actual file to storage/app/public/uploads $file->storeAs('uploads', $filename, 'public'); if ($profile) { // 3. Delete the OLD file from the physical folder using the name stored in DB if ($profile->coverImage) { Storage::disk('public')->delete('uploads/' . $profile->coverImage); } // 4. Update DB with just the NEW filename string $profile->update([ 'coverImage' => $filename, ]); } else { // Create new record if user doesn't have a profile yet Profile::create([ 'user_id'    => $user_id, 'coverImage' => $filename, ]); } return response()->json([ 'status'    => true, 'message'   => 'Cover updated!', 'image_url' => asset('storage/uploads/' . $filename), ]); } } private function getProfile() { return Profile::firstOrCreate( ['user_id' => Auth::id()], ['email' => Auth::user()->email, 'name' => Auth::user()->name] ); } // Cover Photo public function updateCover(Request $request) { $request->validate([ 'coverImage' => 'required|image|mimes:jpeg,png|max:2048', ]); $profile = $this->getProfile(); if ($request->hasFile('coverImage')) { $path                = $request->file('coverImage')->store('covers', 'public'); $profile->coverImage = $path; $profile->save(); } return response()->json(['success' => true, 'message' => 'Cover updated']); } // Avatar public function updateAvatar(Request $request) { $request->validate([ 'avatar' => 'required|image|mimes:jpeg,png|max:2048', ]); $profile = $this->getProfile(); if ($request->hasFile('avatar')) { $path                  = $request->file('avatar')->store('avatars', 'public'); $profile->profileImage = $path; $profile->save(); } return response()->json(['success' => true]); } public function removeAvatar() { $profile               = $this->getProfile(); $profile->profileImage = null; $profile->save(); return response()->json(['success' => true]); } // General Info public function updateInfo(Request $request) { $profile = $this->getProfile(); $profile->update([ 'name'                 => $request->name, 'phone'                => $request->phone, 'ProfessionalHeadline' => $request->headline, 'status'               => $request->status, 'location'             => $request->location, 'linkedin'             => $request->linkedin, 'github'               => $request->github, ]); return response()->json(['success' => true]); } // Resume public function updateResume(Request $request) { $request->validate([ 'resume' => 'required|mimes:pdf|max:2048', ]); $profile = $this->getProfile(); if ($request->hasFile('resume')) { $path            = $request->file('resume')->store('resumes', 'public'); $profile->resume = $path; $profile->save(); } return response()->json(['success' => true]); }
}
