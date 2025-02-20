<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'homePage'])->name('user.home');

Route::get('/create', [UserController::class, 'createPage'])->name('user.createPage');
Route::post('/create', [UserController::class, 'createUser'])->name('user.createUser');

Route::get('/edit/{id}', [UserController::class, 'editPage'])->name('user.editPage');
Route::post('/edit', [UserController::class, 'editUser'])->name('user.editUser');

Route::post('/delete/{id}', [UserController::class, 'deleteUser'])->name('user.deleteUser');

