<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
        public function index()
        {
            $profile_management = DB::table('profile_management')->get();
    
            return view('profile', compact('profile_management'));
        }
}