<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Auth::routes();

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::get('/index', [TaskController::class, 'index'])->name('index');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/upload', [TaskController::class, 'upload'])->name('upload');
Route::get('/edit', [TaskController::class, 'edit'])->name('edit');
Route::get('/delete', [TaskController::class, 'delete'])->name('delete');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

