<?php

use App\Http\Controllers\FarmaciaController;
use App\Models\Farmacia;
use Illuminate\Contracts\Cache\Store;
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

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/farmacias', [FarmaciaController::class, 'index'])->name('farmacia.index');

    Route::get('/farmacias', [FarmaciaController::class, 'create'])->name('farmacia.create');

    Route::get('/farmacias/{id}', [FarmaciaController::class, 'show'])->name('farmacia.show');

    Route::get('/Farmacia/{id}/edit',[FarmaciaController::class, 'edit'])->name('farmacia.edit');

    Route::post('/Farmacia',[FarmaciaController::class, 'store'])->name('farmacia.store');

    Route::put('Farmacia/{id}',[FarmaciaController::class, 'update'])->name('farmacia.update');

    Route::delete('Farmacia/{id}',[FarmaciaController::class, 'delete'])->name('farmacia.delete');
