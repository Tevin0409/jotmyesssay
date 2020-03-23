<?php
use App\Http\Controllers\OrderContoller;
use Illuminate\Http\Request;

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
Route::get('/','AuthController@index');

Route::resource('/order','OrderContoller');
    

// //Landing page routes
// Route::get('/', function () {
//     return view('landing/landing');
// });
// Route::get('/order', function(){
//     return view ('landing/order');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// //user_portal routes
// Route::group(["as"=>"portal.","prefix"=>"portal"],function (){


//     Route::get('/', function () {
//         return view('user_portal/index');
//     })->name('home');

//     Route::get('/jobs', function () {
//         return view('user_portal/jobs');
//     })->name('jobs');
//     Route::get('/chats', function () {
//         return view('user_portal/chat');
//     })->name('chats');
//     Route::get('/login', function () {
//         return view('user_portal/login');
//     })->name('login');
//     Route::get('/register', function () {
//         return view('user_portal/register');
//     })->name('register');



// });
// //admin_portal routes
// Route::group(["as"=>"admin_portal.","prefix"=>"admin_portal"],function (){


//     Route::get('/', function () {
//         return view('admin_portal/dashboard');
//     })->name('dashboard');
//     Route::get('/dashboard', function () {
//         return view('admin_portal/dashboard');
//     })->name('dashboard');
//     Route::get('/charts', function () {
//         return view('admin_portal/charts');
//     })->name('charts');
//     Route::get('/login', function () {
//         return view('admin_portal/login');
//     })->name('login');




// });

// Route::get('/landing/landing', function () {
//     return view('landing/landing');
// });
