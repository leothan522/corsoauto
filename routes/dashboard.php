<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ParametrosController;
use App\Http\Controllers\Dashboard\UsuariosController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\FCM\FcmController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\BienesController;
use App\Http\Controllers\Dashboard\SedesController;
use App\Http\Controllers\Dashboard\PersonalController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user.admin',
    'user.estatus',
    'user.permisos'
])->prefix('/dashboard')->group(function (){

    Route::get('fcm', [FcmController::class, 'index'])->name('fcm.index');

    Route::get('parametros', [ParametrosController::class, 'index'])->name('parametros.index');
    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('export/usuarios/{buscar?}', [UsuariosController::class, 'export'])->name('usuarios.excel');

    //Corsoauto
    Route::get('bienes', [BienesController::class, 'index'])->name('bienes.index');
    Route::get('bienes/{id}', [BienesController::class, 'printEtiqueta'])->name('etiquetas.print');
    Route::get('sedes', [SedesController::class, 'index'])->name('sedes.index');
    Route::get('personal', [PersonalController::class, 'index'])->name('personal.index');

});

Route::get('dashboard/perfil', [UsuariosController::class, 'perfil'])->middleware('auth')->name('usuarios.perfil');
Route::get('chat-directo/{id?}', [ChatController::class, 'index'])->middleware(['user.android'])->name('chat.directo');

Route::get('dashboard/prueba', [DashboardController::class, 'prueba'])->middleware('auth')->name('prueba.index');

Route::get('bienes/{id}/consultar', [BienesController::class, 'webEtiqueta'])->name('etiquetas.web');

