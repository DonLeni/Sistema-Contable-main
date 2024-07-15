<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    //
})->middleware('auth', 'App\Http\Middleware\CheckAdmin');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});


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












// Ruta para seleccionar SUBcuenta
Route::get('/subcuentas', [SubCuentaController::class, 'index'])->name('subcuenta.index');

// Ruta para seleccionar SUB-SUBCuenta
Route::get('/sub-subcuentas', [SubSubCuentaController::class, 'index'])->name('sub-subcuenta.index');

// Ruta para seleccionar TIÓ DE ASIENTO
Route::get('/tipos-asiento', [TipoAsientoController::class, 'index'])->name('tipoasiento.index');

//REGISTAR TRANSACCION
Route::get('/transacciones/create', [TransaccionController::class, 'create'])->name('transacciones.create');
Route::post('/transacciones/store', [TransaccionController::class, 'store'])->name('transacciones.store');


/*

//RUTAS DE INFORME FINANCIERO
Route::get('InformeI',[GraficoController::class, 'index']);

Route::get('/BGeneral', function () {
    return view('InformeFinanciero.BalanceG');
   });


//SEGURIDAD

//gestion de usuario
Route::get('/GestionDeUsuario', function () {
 return view('Seguridad.GestionDeUsuario');
});
//Parametro objeto
Route::get('/ParametroObjeto', function () {
    return view('Seguridad.Objeto');
   });
//Parametro Rol
Route::get('/ParametroRol', function () {
    return view('Seguridad.Rol');
   });
//Parametro Permiso
Route::get('/ParametroPermiso', function () {
    return view('Seguridad.Permiso');
   });

//CONTABILIDAD
//Transacciones

Route::get('/transacciones/nueva', [TransaccionController::class, 'mostrarFormulario'])->name('transacciones.nueva');
Route::post('/guardar-transaccion', [TransaccionController::class, 'registrarTransaccion'])->name('guardar.transaccion');


Route::get('/subcuentas/{cuentaId}', [TransaccionController::class, 'obtenerSubcuentas']);
Route::get('/sub-subcuentas/{subcuentaId}', [TransaccionController::class, 'obtenerSubSubcuentas']);























Route::get('/Transacciones', function () {
    return view('Contabilidad.RegistroTransacciones');
   });

//Pago De Residente
Route::get('/PagoResidente', function () {
    return view('Contabilidad.PagoResidente');
   });

   //Pago De Residente
Route::get('/CuentasPorCobrar', function () {
    return view('Contabilidad.CuentasXCobrar');
   });

      //Ciere Contable
Route::get('/CierreContable', function () {
    return view('Contabilidad.CierreContable');
   });


   //AYUDA Y SOPORTE
   Route::get('/Soporte', function () {
    return view('AyudaSoporte.Soporte');
   });
    
//MANTENIMIENTO
Route::get('/Residente', function () {
    return view('Mantenimiento.Residente');
   });

   //ADMINISTRACION
Route::get('/GestionDeBaseDeDatos', function () {
    return view('Administracion.GestionBD');
   });


*/
require __DIR__.'/auth.php';
