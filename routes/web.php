<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\GraficoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\SubCuentaController;
use App\Http\Controllers\SubSubCuentaController;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\TipoCuentaController;
use App\Http\Controllers\DetalleTransaccionController;
use App\Http\Controllers\SaldoBalanzaController;
use App\Http\Controllers\TransaccionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// routes/web.php
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit-profile');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';



// RUTAS CONTABILIDAD

// Ruta para seleccionar Catalogo de cuenta
Route::get('/CatalogoCuentas', [CatalogoController::class, 'index'])->name('catalogocuenta.index');
// Ruta para seleccionar Catalogo de cuenta
Route::get('/CatalogoEdit', [CatalogoController::class, 'indexEdit'])->name('catalogocuenta.indexEdit');
// Ruta para seleccionar cuenta
Route::get('/TipoCuentaEdit', [TipoCuentaController::class, 'index'])->name('tipocuenta.index');
// Ruta para seleccionar cuenta
Route::get('/DetalleTransaccionEdit', [DetalleTransaccionController::class, 'index'])->name('deatlletransaccion.index');
// Ruta para seleccionar cuenta
Route::get('/SaldoBalanzaEdit', [SaldoBalanzaController::class, 'index'])->name('saldobalanza.index');
// Ruta para Libro Diario
Route::get('/LibroDiario', [TransaccionController::class, 'index'])->name('saldobalanza.index');


// Ruta para transaccion
Route::get('/transacciones/create', [TransaccionController::class, 'create'])->name('transacciones.create');
// Ruta para Guardar transacciones
Route::post('/transacciones/store', [TransaccionController::class, 'store'])->name('transacciones.store');