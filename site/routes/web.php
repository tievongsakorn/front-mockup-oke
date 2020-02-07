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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/oldmain', function () {
    return view('pages.index');
});

Route::get('/pro', function () {
    return view('pages.profile');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/test' , function(){
    return view('pages.test');
});
Route::resources([
    '/package' => 'UserpackController',
]);

URL::forceScheme('https');