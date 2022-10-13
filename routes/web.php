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

Route::get('/', [CrudController::class, 'create']);

Route::get('/create', [CrudController::class, 'create'])->name('create.index');
Route::post('/success', [CrudController::class, 'store'])->name('create.store');

Route::get('/dashboard', [CrudController::class, 'dashboard'])->name('dashboard.index');

Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CrudController::class, 'update'])->name('edit.update');

Route::delete('/delete/{id}', [CrudController::class, 'destroy'])->name('delete');

Route::post('/dashboard', [CrudController::class, 'dashboard'])->name('search');
