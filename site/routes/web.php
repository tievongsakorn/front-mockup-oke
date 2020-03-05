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
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/modal', function () {
    return view('pages.modal');
});

Route::get('/pro', function () {
    return view('pages.profile');
});

Route::get('/playlist', function () {
    return view('pages.playlist');
});

Route::get('/playlist/num', function () {
    return view('pages.playlistdetail');
});


Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/test' , function(){
    return view('pages.test');
});

Route::resources([
    '/package' => 'UserpackController',
]);

Route::get('/pay' , function(){
    return view('pages.payment');
});

URL::forceScheme('https');