<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class,'profile'])->middleware('role')->name('profile');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function() {
    $jobs = DB::table('job_post')->get();
    return view('homepage', [
        'job_post' => $jobs
    ]);
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/jobdetails/{id}', [JobController::class, 'show'])->name('jobdetails');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');