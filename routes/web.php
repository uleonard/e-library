<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\BookController;
//use App\Http\Controllers\LoginController;


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
    return view('login');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);



/*
|--------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------
*/
Route::post('/login', [LoginController::class, 'authenticate']);
//Route::post('login', 'LoginController@authenticate');
//Route::post('logout', 'LoginController@logout')->name('logout');
