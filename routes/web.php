<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\GreetingController;

Route::get('/greeting/{id}/{name}/{sex}', [GreetingController::class, 'show_greeting_page']);



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
    return view('welcome');
});


// Route::get('/greeting', function () {
//     return "Hello World";
// });

// Route::get('/greeting/{id?}', function ($id = 100) {
//     // return "Hello " . $id;
//     return redirect()->route('profile');
// });

// Route::get('/greeting/{id?}/name/{name?}', function ($id = 100, $name = "Kok") {
//     return "Hello " . $id . " Name " . $name;
// });

// Route::get('users/profile', function () {})->name('profile');

// Route::get('/greeting', [GreetingController::class, 'index']);

// Route::get('greeting/{id}', [GreetingController::class, 'show']);

// Route::resource('/greeting', GreetingController::class);
