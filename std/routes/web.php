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
    return view('welcome');
}

);

Route::get('/allstd', function () {
    return view('allstd');
}

);

Route::get('/cs', function () {
    return view('cs');
});
Route::get('/it', function () {
    return view('it');
});
Route::get('/is', function () {
    return view('is');
});



Route::get('/form',"App\Http\Controllers\PostsController@form");

Route::post('/addform',"App\Http\Controllers\PostsController@addform");

Route::get('/allstd',"App\Http\Controllers\PostsController@showform");





