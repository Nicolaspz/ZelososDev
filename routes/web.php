<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/teste', function () {
    return view('layouts.main');
});

Route::get('/test1',[\App\Http\Controllers\Controller::class,'teste1']);
Route::get('/agenda',[\App\Http\Controllers\AgendaController::class, 'index']);
Route::get('/create',[\App\Http\Controllers\AgendaController::class, 'create']);
Route::post('/store',[\App\Http\Controllers\AgendaController::class, 'store'])->name('agenda.store');
Route::post('/delete/{id}',[\App\Http\Controllers\AgendaController::class, 'delete'])->name('agenda.delete');
Route::get('/edit/{id}',[\App\Http\Controllers\AgendaController::class, 'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\AgendaController::class, 'update'])->name('agenda.update');


