<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PostController;

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

Route::resource('todo', TodoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/posts/{id}/ogp.png','\App\Http\Controllers\PostController@ogp');
// Route::get('/posts/{id}/ogp.png', [PostController::class, 'ogp'
Route::get('posts/1/opg.png', [PostController::class, 'ogp']);


require __DIR__.'/auth.php';
