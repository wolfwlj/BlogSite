<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');


Route::resource('posts', 'App\Http\Controllers\PostsController');
// Route::get('/about', function () {
//     return view('pages.about');
// });



// Route::get('/users/{id}/{naam}', function ($id, $naam) {
//     return 'kak'.$id.'naam'.$naam;
//     // Dit is voor meerdere parameters in url : http://tapsave.local/users/2/testNaam
// });




// Route::get('/vriend', function () {
//     return 'Hello, Friend';
// });
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
