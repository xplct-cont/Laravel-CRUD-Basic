<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [CrudController::class, 'index'])->name('index');
Route::get('/create_student', [CrudController::class, 'create'])->name('create_student');
Route::post('/create_new_student', [CrudController::class, 'store'])->name('create_new_student');
Route::get('delete_student/{id}', [CrudController::class, 'destroy']);
Route::get('edit_student/{id}', [CrudController::class, 'edit']);
Route::put('update_student/{id}', [CrudController::class, 'update']);