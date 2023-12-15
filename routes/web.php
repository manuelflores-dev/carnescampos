<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RecorridoController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CobrarCuentaController;
use App\Http\Controllers\PagarCuentaController;
use App\Http\Controllers\DashboardController;
use App\Models\Empleado;
use App\Models\Mantenimiento;
use App\Models\PagarCuenta;
use App\Models\Proveedor;
use App\Models\Recorrido;
use App\Http\Controllers\PDFController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Routes Empleado
    Route::get('/empleado/crear', [EmpleadoController::class, 'create'])->name('empleado.create');
    Route::get('/empleado', [EmpleadoController::class, 'index'])->name('empleado.index');
    Route::post('/empleado', [EmpleadoController::class, 'store'])->name('empleado.store');
    Route::get('/buscar-emleado', [EmpleadoController::class, 'buscar'])->name('buscar.empleado');
    Route::get('/empleado/{empleado}', [EmpleadoController::class, 'edit'])->name('empleado.edit');
    Route::patch('/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('empleado.update');
    Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');

    //Routes Vehiculo
    Route::get('/vehiculo/crear', [VehiculoController::class, 'create'])->name('vehiculo.create');
    Route::get('/vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
    Route::post('/vehiculo', [VehiculoController::class, 'store'])->name('vehiculo.store');
    Route::get('/buscar-vehiculo', [VehiculoController::class, 'buscar'])->name('buscar.vehiculo');
    Route::get('/vehiculo/{vehiculo}', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
    Route::patch('/vehiculo/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculo.update');
    Route::delete('/vehiculo/{vehiculo}', [VehiculoController::class, 'destroy'])->name('vehiculo.destroy');

    //Routes Proveedor
    Route::get('/proveedor/crear', [ProveedorController::class, 'create'])->name('proveedor.create');
    Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor.index');
    Route::post('/proveedor', [ProveedorController::class, 'store'])->name('proveedor.store');
    Route::get('/buscar-proveedor', [ProveedorController::class, 'buscar'])->name('buscar.proveedor');
    Route::get('/proveedor/{proveedor}', [ProveedorController::class, 'edit'])->name('proveedor.edit');
    Route::patch('/proveedor/{proveedor}', [ProveedorController::class, 'update'])->name('proveedor.update');
    Route::delete('/proveedor/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');

    //Routes Cliente
    Route::get('/cliente/crear', [ClienteController::class, 'create'])->name('cliente.create');
    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/buscar-cliente', [ClienteController::class, 'buscar'])->name('buscar.cliente');
    Route::get('/cliente/{cliente}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::patch('/cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    //Routes Recorrido
    Route::get('/recorrido/crear', [RecorridoController::class, 'create'])->name('recorrido.create');
    Route::get('/recorrido', [RecorridoController::class, 'index'])->name('recorrido.index');
    Route::get('/generar-pdf-recorrido', [PDFController::class, 'generarPDF'])->name('recorrido.pdf');
    Route::post('/recorrido', [RecorridoController::class, 'store'])->name('recorrido.store');
    Route::get('/buscar-recorrido', [RecorridoController::class, 'buscar'])->name('buscar.recorrido');
    Route::get('/empleado/{id}/recorridos', [RecorridoController::class, 'empleadoRecorridos'])->name('recorridos.empleado');
    Route::get('/vehiculo/{id}/recorridos', [RecorridoController::class, 'vehiculoRecorridos'])->name('recorridos.vehiculo');
    Route::get('/recorrido/{recorrido}', [RecorridoController::class, 'edit'])->name('recorrido.edit');
    Route::patch('/recorrido/{recorrido}', [RecorridoController::class, 'update'])->name('recorrido.update');
    Route::delete('/recorrido/{recorrido}', [RecorridoController::class, 'destroy'])->name('recorrido.destroy');

    //Routes Mantenimiento
    Route::get('/mantenimiento/crear', [MantenimientoController::class, 'create'])->name('mantenimiento.create');
    Route::get('/mantenimiento', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
    Route::post('/mantenimiento', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
    Route::get('/buscar-mantenimiento', [MantenimientoController::class, 'buscar'])->name('buscar.mantenimiento');
    Route::get('/vehiculo/{id}/mantenimientos', [MantenimientoController::class, 'vehiculoMantenimientos'])->name('mantenimientos.vehiculo');
    Route::get('/mantenimiento/{mantenimiento}', [MantenimientoController::class, 'edit'])->name('mantenimiento.edit');
    Route::patch('/mantenimiento/{mantenimiento}', [MantenimientoController::class, 'update'])->name('mantenimiento.update');
    Route::delete('/mantenimiento/{mantenimiento}', [MantenimientoController::class, 'destroy'])->name('mantenimiento.destroy');

    //Routes Factura
    Route::get('/factura/crear', [FacturaController::class, 'create'])->name('factura.create');
    Route::get('/factura', [FacturaController::class, 'index'])->name('factura.index');
    Route::post('/factura', [FacturaController::class, 'store'])->name('factura.store');
    Route::get('/proveedor/{id}/facturas', [FacturaController::class, 'proveedorFacturas'])->name('facturas.proveedor');
    Route::get('/factura/{factura}', [FacturaController::class, 'edit'])->name('factura.edit');
    Route::patch('/factura/{factura}', [FacturaController::class, 'update'])->name('factura.update');
    Route::delete('/factura/{factura}', [FacturaController::class, 'destroy'])->name('factura.destroy');

    //Routes Cobrar cuentas
    Route::get('/cobrarcuenta/crear', [CobrarCuentaController::class, 'create'])->name('cobrarcuenta.create');
    Route::get('/cobrarcuenta', [CobrarCuentaController::class, 'index'])->name('cobrarcuenta.index');
    Route::post('/cobrarcuenta', [CobrarCuentaController::class, 'store'])->name('cobrarcuenta.store');
    Route::get('/buscar-cobrarcuenta', [CobrarCuentaController::class, 'buscar'])->name('buscar.cobrarcuenta');
    Route::get('/cliente/{id}/cobrarcuentas', [CobrarCuentaController::class, 'clienteCobrarcuentas'])->name('cobrarcuentas.cliente');
    Route::get('/cobrarcuenta/{cobrarcuenta}', [CobrarCuentaController::class, 'edit'])->name('cobrarcuenta.edit');
    Route::patch('/cobrarcuenta/{cobrarcuenta}', [CobrarCuentaController::class, 'update'])->name('cobrarcuenta.update');
    Route::delete('/cobrarcuenta/{cobrarcuenta}', [CobrarCuentaController::class, 'destroy'])->name('cobrarcuenta.destroy');

    //Routes Pagar cuentas
    Route::get('/pagarcuenta/crear', [PagarCuentaController::class, 'create'])->name('pagarcuenta.create');
    Route::get('/pagarcuenta', [PagarCuentaController::class, 'index'])->name('pagarcuenta.index');
    Route::post('/pagarcuenta', [PagarCuentaController::class, 'store'])->name('pagarcuenta.store');
    Route::get('/buscar-pagarcuenta', [PagarCuentaController::class, 'buscar'])->name('buscar.pagarcuenta');
    Route::get('/proveedor/{id}/pagarcuentas', [PagarCuentaController::class, 'ProveedorPagarCuentas'])->name('pagarcuentas.proveedor');
    Route::get('/pagarcuenta/{pagarcuenta}', [PagarCuentaController::class, 'edit'])->name('pagarcuenta.edit');
    Route::patch('/pagarcuenta/{pagarcuenta}', [PagarCuentaController::class, 'update'])->name('pagarcuenta.update');
    Route::delete('/pagarcuenta/{pagarcuenta}', [PagarCuentaController::class, 'destroy'])->name('pagarcuenta.destroy');
});

require __DIR__ . '/auth.php';
