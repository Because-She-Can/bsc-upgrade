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



Route::get('/get_involved', function () {
    return view('website.get_involved');
});

Route::get('dfwwc_program', function () {
    return view('website.dfwwc_program');
});

Route::get('bscmentee', function () {
    return view('website.mentee');
});

Route::get('bscmentor', function () {
    return view('website.mentor');
});

Route::get('/donate', function () {
    return view('website.donate');
});
Route::get('/program_list', function () {
    return view('website.program_list');
});

Route::get('/about', function () {
    return view('website.about_us');
});

Route::get('/program_list', function () {
    return view('website.program_list');
});

// Route::get('/newHome', function () {
//     return view('website.newHome');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save_member', [App\Http\Controllers\MemberController::class, 'store'])->name('save_member');
Route::get('/admin/volunteers/{type}',[App\Http\Controllers\volunteerControler::class, 'volunteers'])->name('admin.volunteers');
Route::get('/admin/members/{type}',[App\Http\Controllers\MemberController::class, 'members'])->name('admin.members');

Route::post('/save_volunteer', [App\Http\Controllers\volunteerControler::class, 'storevolunteer'])->name('save_volunteer');
