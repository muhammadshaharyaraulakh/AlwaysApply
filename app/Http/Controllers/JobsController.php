<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alljob;
use App\Models\Company;

class JobsController extends Controller
{

    public function job($id)
    {
        $job = Alljob::with('company')->findOrFail($id);
        return view('userPages.job', compact('job'));
    }


    public function company($id)
    {
        $company = Company::findOrFail($id);

        $jobs = Alljob::with('company')
            ->where('company_id', $id)
            ->where('status', 'Actively Hiring')
            ->paginate(9);

        return view('userPages.companyjob', compact('company', 'jobs'));
    }


    public function index()
    {
        $jobs = Alljob::with('company')->get();
        return view('home', compact('jobs'));
    }


    public function jobs()
    {
        $jobs = Alljob::with('company')->paginate(4);
        return view('userPages.joblisting', compact('jobs'));
    }
    public function search(Request $request)
{
    $title = $request->input('title');
    $location = $request->input('location');

    if (empty($title) && empty($location)) {
        return redirect('/');
    }

    $jobs = Alljob::with('company')

        ->when($title, function ($query) use ($title) {
            $query->where('title', 'LIKE', "%{$title}%");
        })

        ->when($location, function ($query) use ($location) {
            $query->whereHas('company', function ($q) use ($location) {
                $q->where('location', 'LIKE', "%{$location}%");
            });
        })

        ->paginate(6);

    return view('userPages.search', compact('jobs'));
}
public function searchjob(Request $request)
{
    $title = $request->input('title');
    $location = $request->input('location');
    $type = $request->input('type');

    if (empty($title) && empty($location) && empty($type)) {
        return redirect('jobs');
    }

    $jobs = Alljob::with('company')
    ->when($title, function ($query) use ($title) {
        $query->where('title', 'LIKE', "%{$title}%");
    })
    ->when($type, function ($query) use ($type) {
        $query->where('job_type', 'LIKE', "%{$type}%");
    })
    ->when($location, function ($query) use ($location) {
        $query->whereHas('company', function ($q) use ($location) {
            $q->where('location', 'LIKE', "%{$location}%");
        });
    })
    ->paginate(6);

    return view('userPages.joblisting', compact('jobs'));
}
}