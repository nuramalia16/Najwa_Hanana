<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show($id)
    {
        $job = DB::table('job_post')->find($id);
    
        if (!$job) {
            abort(404);
        }
    
        return view('jobdetails', ['job' => $job]);
    }
}
