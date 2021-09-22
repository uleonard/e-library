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

/*
Route::get('/students', function () {
    return view('students.dashboard');
});

*/
Route::get('students/dashboard',[StudentController::class, 'index']);
Route::get('students/books/{id}',[StudentController::class, 'books_listing'])->name('students.books');


Route::get('session/set',[SessionController::class, 'storeSessionData']);
Route::get('session/remove',[SessionController::class, 'deleteSessionData']);


Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/dashboard', [UserController::class, 'dashboard']);


Route::get('/modules', [ModuleController::class, 'index']);
Route::get('/modules/ids', [ModuleController::class, 'module_ids']);
Route::get('/modules/create', [ModuleController::class, 'create']);

/*
|--------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------
*/
Route::post('/login', [LoginController::class, 'authenticate']);
//Route::post('login', 'LoginController@authenticate');
//Route::post('logout', 'LoginController@logout')->name('logout');
