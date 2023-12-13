<?php

namespace App\Http\Controllers;
use App\models\User as ModelUser;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**d
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function profile($id) {
        $user = ModelUser::find($id);

        $this->authorize('view', $user); // untuk memberikan info kalau fungsi profile memiliki ototrisasi

        return view('profile', compact('user'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:employee,employer'], // Add this line for the 'role' field
        ]);
    }
}