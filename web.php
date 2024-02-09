<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('persons', [userController::class, 'data'])->name('persons.data') ;
Route::get('persons/create', [userController::class, 'create'])->name('persons.create') ;
Route::post('persons/store', [userController::class, 'store'])->name('persons.store') ;
Route::get('persons/edit/{id}', [userController::class, 'edit'])->name('persons.edit') ;
Route::post('persons/edit/{id}', [userController::class, 'update'])->name('persons.update') ;
Route::get('persons/delete/{id}', [userController::class, 'delete'])->name('persons.delete') ;
