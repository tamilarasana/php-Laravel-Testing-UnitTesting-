<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;


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

Route::get('/sam', function () {
    return view('welcome');
});

// Route::get('/abc', function () {
//     return 'welcome';
// });

// Route::post('/user', 'UserController@index'); 

Route::get('/about', function (){
	return "tamil";
});

Route::get('/abc', function (){
	return "tamil";
});
Route::post('/books', 'BooksController@store');
Route::patch('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}', 'BooksController@destroy');

Route::post('/author', 'AuthorsController@store');