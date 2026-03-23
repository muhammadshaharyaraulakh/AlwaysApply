<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Profile extends Controller
{
    public function addSkill(Request $request)
    {
        $request->validate([
            'skill' => 'required|alpha|max:255',
        ]);

        $user = Auth::user();

        $check = Skill::where('skill_name', $request->skill)
            ->where('user_id', $user->id)
            ->first();

        if ($check) {
            return response()->json([
                'status'  => false,
                'message' => 'Skill already added',
            ]);
        }

        $skill = Skill::create([
            'skill_name' => $request->skill,
            'user_id'    => $user->id,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Skill added successfully',
            'skill'   => $skill,
        ]);
    }
    public function showSkills(Request $request)
    {
        $user   = Auth::user();
        $skills = Skill::where('user_id', $user->id)->latest()->get();
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'status' => true,
                'skills' => $skills,
            ]);
        }
        return view('userPages.dashboard');
    }
    public function deleteSkill(Request $request)
    {
        $deleted = Skill::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->delete();

        if (! $deleted) {
            return response()->json([
                'status'  => false,
                'message' => 'Skill not found',
            ]);
        }

        return response()->json([
            'status'  => true,
            'message' => 'Skill deleted successfully',
        ]);
    }

    public function deleteall()
    {
        $user  = Auth::user();
        $count = Skill::where('user_id', $user->id)->count();

        if ($count === 0) {
            return response()->json(['status' => false, 'message' => 'No skills to delete']);
        }

        Skill::where('user_id', $user->id)->delete();

        return response()->json(['status' => true, 'message' => 'All skills deleted successfully']);
    }

    public function addProject(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'title'        => 'required|string|max:255',
            'url'          => 'required|url|max:255',
            'description'  => 'required|string',
            'technologies' => 'required|string|max:255',
        ]);

        if (Project::where('title', $request->title)->where('user_id', $user->id)->exists()) {
            return response()->json([
                'status'  => false,
                'message' => 'Project with this title already exists',
            ]);
        }

        $project = Project::create([
            'title'        => $request->title,
            'link'         => $request->url,
            'description'  => $request->description,
            'technologies' => $request->technologies,
            'user_id'      => $user->id,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Project added successfully',
            'project' => $project,
        ]);
    }

    public function show($id)
    {
        $user = Auth::user();

        $project = Project::where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        if (! $project) {
            return response()->json([
                'status'  => false,
                'message' => 'Project not found',
            ]);
        }

        return response()->json([
            'status'  => true,
            'project' => $project,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        $request->validate([
            'title'        => 'required|string|max:255',
            'url'          => 'required|url|max:255',
            'description'  => 'required|string',
            'technologies' => 'required|string',
        ]);

        $project = Project::where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        if (! $project) {
            return response()->json([
                'status'  => false,
                'message' => 'Project not found',
            ]);
        }

        if (Project::where('title', $request->title)
            ->where('user_id', $user->id)
            ->where('id', '!=', $id)
            ->exists()) {
            return response()->json([
                'status'  => false,
                'message' => 'Project with this title already exists',
            ]);
        }

        $project->update([
            'title'        => $request->title,
            'link'         => $request->url,
            'description'  => $request->description,
            'technologies' => $request->technologies,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Project updated successfully',
            'project' => $project,
        ]);
    }

    public function showall()
    {
        $user = Auth::user();

        $projects = Project::where('user_id', $user->id)
            ->latest()
            ->get();

        return response()->json([
            'status'   => true,
            'projects' => $projects,
        ]);
    }

    public function deleteProject(Request $request)
    {
        $deleted = Project::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->delete();

        if (! $deleted) {
            return response()->json([
                'status'  => false,
                'message' => 'Project not found',
            ]);
        }

        return response()->json([
            'status'  => true,
            'message' => 'Project deleted successfully',
        ]);
    }
    public function addEducation(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'institute'   => 'required|string|max:255',
            'start'       => 'required|integer',
            'completed'   => 'required|integer',
            'description' => 'required|string',
        ]);

        $edu = Education::create([
            'name'        => $request->name,
            'institute'   => $request->institute,
            'start'       => $request->start,
            'completed'   => $request->completed,
            'description' => $request->description,
            'user_id'     => Auth::id(),
        ]);

        return response()->json(['status' => true, 'message' => 'Education added', 'education' => $edu]);
    }

    public function showAllEducation()
    {
        $edu = Education::where('user_id', Auth::id())->orderBy('start', 'desc')->get();
        return response()->json(['status' => true, 'education' => $edu]);
    }

    public function showEducation($id)
    {
        $edu = Education::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return response()->json(['status' => true, 'education' => $edu]);
    }

    public function editEducation(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'institute'   => 'required|string|max:255',
            'start'       => 'required|integer',
            'completed'   => 'required|integer',
            'description' => 'required|string',
        ]);

        $edu = Education::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $edu->update($request->all());

        return response()->json(['status' => true, 'message' => 'Education updated']);
    }

    public function deleteEducation(Request $request)
    {
        Education::where('id', $request->id)->where('user_id', Auth::id())->delete();
        return response()->json(['status' => true]);
    }

    // Don't forget to import the model

// ... inside Profile class ...

   public function addExperience(Request $request)
    {
        // 1. Validate the request
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'jobType'     => 'required|in:Full Time,Part Time,Internship,contract,Freelance',
            'location'    => 'required|string|max:255',
            'start_month' => 'required|string',
            'start_year'  => 'required|string',
            'end_month'   => 'nullable|string',
            'end_year'    => 'nullable|string',
            'description' => 'required|string',
        ]);

        // 2. Append the authenticated user ID securely
        $validated['user_id'] = Auth::id();

        // 3. Create the record using ONLY validated data
        $exp = Experience::create($validated);

        return response()->json([
            'status'     => true,
            'message'    => 'Experience added successfully',
            'experience' => $exp,
        ]);
    }

    public function showAllExperience()
    {
        $experiences = Experience::where('user_id', Auth::id())->latest()->get();
        
        return response()->json([
            'status' => true, 
            'experiences' => $experiences
        ]);
    }

    public function showExperience($id)
    {
        // Using first() instead of firstOrFail() to return clean JSON errors
        $exp = Experience::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$exp) {
            return response()->json([
                'status'  => false,
                'message' => 'Experience not found'
            ]);
        }

        return response()->json([
            'status'     => true, 
            'experience' => $exp
        ]);
    }

    public function editExperience(Request $request, $id)
    {
        // 1. Fixed missing validation rules for Edit
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'jobType'     => 'required|in:Full Time,Part Time,Internship,contract,Freelance',
            'location'    => 'required|string|max:255',
            'start_month' => 'required|string',
            'start_year'  => 'required|string',
            'end_month'   => 'nullable|string', // Added
            'end_year'    => 'nullable|string', // Added
            'description' => 'required|string',
        ]);

        $exp = Experience::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$exp) {
            return response()->json([
                'status'  => false,
                'message' => 'Experience not found'
            ]);
        }

        // 2. Update using ONLY validated data
        // If the user checks "I currently work here", this safely forces end_month/year to null
        $exp->update($validated);

        return response()->json([
            'status'  => true, 
            'message' => 'Experience updated successfully'
        ]);
    }

    public function deleteExperience(Request $request)
    {
        $deleted = Experience::where('id', $request->id)->where('user_id', Auth::id())->delete();

        // Ensure the record actually existed before returning success
        if (!$deleted) {
            return response()->json([
                'status'  => false,
                'message' => 'Experience not found'
            ]);
        }

        return response()->json([
            'status'  => true, 
            'message' => 'Experience deleted'
        ]);
    }
  public function getInformation(Request $request)
    {
        $user = Auth::user();
        
        // Fetch the information record for the logged-in user
        $info = Information::where('user_id', $user->id)->first();

        return response()->json([
            'status' => true,
            'user'   => [
                'name'  => $user->name,
                'email' => $user->email,
            ],
            'info'   => $info // This will be null if they haven't saved info yet, which is fine
        ]);
    }
    public function getInfo(Request $request)
    {
        $user = Auth::user();
        
        // Fetch the information record for the logged-in user
        $info = Information::where('user_id', $user->id)->first();

        return response()->json([
            'status' => true,
            'user'   => [
                'name'  => $user->name,
                'email' => $user->email,
            ],
            'info'   => $info // This will be null if they haven't saved info yet, which is fine
        ]);
    }

}
