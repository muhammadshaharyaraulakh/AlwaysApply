<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alljob;
use App\Models\Company;

class JobsController extends Controller

{
    public function job($id){
        $job = Alljob::with('company')->findOrFail($id);
        return view('userPages.job', compact('job'));
    }
    public function companyAllJobs($id){
    $company = Company::with('jobs')->findOrFail($id);
    $jobs = $company->jobs;

    return view('userPages.jobs', compact('jobs'));
}
    public function index(){
        $jobs = Alljob::with('company')->get();
        return view('/', compact('jobs'));
    }
}
