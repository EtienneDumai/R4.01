<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/session/add', [SessionController::class, 'add'])->name('session.add');
Route::get('/session/view', [SessionController::class, 'view'])->name('session.view');
Route::get('/session/delete', [SessionController::class, 'delete'])->name('session.delete');
