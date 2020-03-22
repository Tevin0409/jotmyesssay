<?php
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
//Landing page routes
Route::get('/', function () {
    return view('landing/landing');
});
Route::resource('/order','OrderContoller');

Route::get('/about', function () {
    return view('about');
});

//user_portal routes
Route::group(["as"=>"portal.","prefix"=>"portal"],function (){


    Route::get('/', function () {
        return view('user_portal/index');
    })->name('home');

    Route::get('/jobs', function () {
        return view('user_portal/jobs');
    })->name('jobs');
    Route::get('/chats', function () {
        return view('user_portal/chat');
    })->name('chats');
    Route::get('/login', function () {
        return view('user_portal/login');
    })->name('login');
    Route::get('/register', function () {
        return view('user_portal/register');
    })->name('register');



});
//admin_portal routes
Route::group(["as"=>"admin_portal.","prefix"=>"admin_portal"],function (){


    Route::get('/', function () {
        return view('admin_portal/dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('admin_portal/dashboard');
    })->name('dashboard');
    Route::get('/charts', function () {
        return view('admin_portal/charts');
    })->name('charts');
    Route::get('/login', function () {
        return view('admin_portal/login');
    })->name('login');




});

Route::get('/landing/landing', function () {
    return view('landing/landing');
});
