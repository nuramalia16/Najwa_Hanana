<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $job = DB::table('profile_management')->find($id);
    
        if (!$job) {
            abort(404);
        }
    
        return view('jobdetails', ['job' => $job]);
    }
}
