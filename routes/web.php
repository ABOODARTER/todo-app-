<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\todosController;
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

Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/todos',[todosController::class,'alltodos'])->name('todos.alltodos');
Route::get('/show/{id}',[todosController::class,'show'])->name('todos.show');
Route::get('/create',[todosController::class,'create'])->name('todos.create');
Route::post('/create',[todosController::class,'save']);
Route::get('/todo/{id}/edit',[todosController::class,'edit'])->name('todos.edit');
Route::post('/todo/{id}',[todosController::class,'save_edit']);
Route::get('/todo/{id}/delet',[todosController::class,'delet'])->name('todos.delet');
Route::get('/todo/{id}complete',[todosController::class,'compleate_statue'])->name('todos.compleat_statue');


