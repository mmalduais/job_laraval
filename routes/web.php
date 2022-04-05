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

Route::get('/admin/jobs',function(){
    return view('admin.jobs');
});

// Route::get('/admin/company',function(){
//     return view('admin.company');
// });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AdminController::class,'index']);
Route::post('/save_job',[AdminController::class,'login'])->name('do_login');


Route::get('/add-education', function () {
    return view('add-education');
});

Route::get('/add-exper', function () {
    return view('add-exper');

});

Route::get('/add-personal', function () {
    return view('add-personal');
});

Route::get('/add-skill', function () {
    return view('add-skill');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/details-job', function () {
    return view('details-job');
});


Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/edait-skill', function () {
    return view('edait-skill');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/experiance', function () {
    return view('experiance');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/jop-page', function () {
    return view('jop-page');
});

Route::get('/personal-edait', function () {
    return view('personal-Edait');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/skill', function () {
    return view('skill');
});


Route::get('/sliderVertical', function () {
    return view('sliderVertical');
});



