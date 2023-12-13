<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index() {
        $data = Category::all();
        return view('homepage', [data=>$data]);
    }
}
