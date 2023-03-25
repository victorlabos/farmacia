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
    Route::get('/farmacias', [FarmaciaController::class, 'index'])->name('farmacias.index');

    Route::get('/farmacias/novo', [FarmaciaController::class, 'create'])->name('farmacias.create');

    Route::get('/farmacias/{farmacia}', [FarmaciaController::class, 'show'])->name('farmacias.show');

    Route::get('/farmacias/{farmacia}/edit',[FarmaciaController::class, 'edit'])->name('farmacias.edit');

    Route::post('/farmacias',[FarmaciaController::class, 'store'])->name('farmacias.store');

    Route::put('/farmacias/{farmacia}',[FarmaciaController::class, 'update'])->name('farmacias.update');

    Route::delete('/farmacias/{farmacia}',[FarmaciaController::class, 'destroy'])->name('farmacias.destroy');
