<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiclesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', [VehiclesController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [VehiclesController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles', [VehiclesController::class, 'store'])->name('vehicles.store');