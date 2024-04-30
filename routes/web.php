<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CarnetVacunaController;
use App\Http\Controllers\FacturacionPagoController;
use App\Http\Controllers\SoporteTecnicoController;
use App\Http\Controllers\PqrsController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas CRUD para Clientes
Route::resource('clientes', ClienteController::class)->middleware('auth');

// Rutas CRUD para Empleados
Route::resource('empleados', EmpleadoController::class)->middleware('auth');

// Rutas CRUD para Perros
Route::resource('perros', PerroController::class)->middleware('auth');

// Rutas CRUD para Reservas
Route::resource('reservas', ReservaController::class)->middleware('auth');

// Rutas CRUD para Carnet de Vacunas
Route::resource('carnet_vacunas', CarnetVacunaController::class)->middleware('auth');

// Rutas CRUD para Facturación de Pagos
Route::resource('facturacion_pagos', FacturacionPagoController::class)->middleware('auth');

// Rutas CRUD para Soporte Técnico
Route::resource('soporte_tecnico', SoporteTecnicoController::class)->middleware('auth');

// Rutas CRUD para PQRS
Route::resource('pqrs', PqrsController::class)->middleware('auth');

require __DIR__.'/auth.php';
