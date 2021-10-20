<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.index');
});

Route::get('/about_us', function () {
    return view('website.about_us');
});



Route::get('/get_involved', function () {
    return view('website.get_involved');
});

Route::get('/dfwwc_program', function () {
    return view('website.dfWwc_program');
});

Route::get('/donation', function () {
    return view('website.donation');
});
Route::get('/program_list', function () {
    return view('website.program_list');
});

Route::get('/donation', function () {
    return view('website.donation');
});
Route::get('/about', function () {
    return view('website.about_us');
});

Route::get('/program_list', function () {
    return view('website.program_list');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save_member', [App\Http\Controllers\MemberController::class, 'store'])->name('save_member');
