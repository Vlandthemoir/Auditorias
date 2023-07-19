<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LicitacionController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DescargarController;
/*rutas login*/ 
Route::get('/',[LoginController::class,'index'])
->name('login.index');
Route::post('/',[LoginController::class,'store'])
->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
->name('login.destroy');
/*ruta de home*/
Route::get('/home', function () {
    return view('Home');
})->middleware('auth');
/*rutas para las licitaciones*/
Route::get('/licitacion',[LicitacionController::class,'index'])
->middleware('auth')
->name('licitacion.index');
Route::get('/licitacion-create',[LicitacionController::class,'create'])
->middleware('auth')
->name('licitacion.create');
Route::post('/licitacion-store',[LicitacionController::class,'store'])
->middleware('auth')
->name('licitacion.store');
Route::post('/licitacion-store_admin',[LicitacionController::class,'store_admin'])
->middleware('auth')
->name('licitacion.store_admin');
Route::get('/licitacion-all',[LicitacionController::class,'all'])
->middleware('auth')
->name('licitacion.all');
Route::delete('/licitacion-delete/{id}',[LicitacionController::class,'destroy'])
->middleware('auth')
->name('licitacion.delete');
Route::get('/licitacion-edit/{id}', [LicitacionController::class, 'edit'])
->middleware('auth')
->name('licitacion.edit');
Route::put('/licitacion-update/{id}', [LicitacionController::class, 'update'])
->middleware('auth')
->name('licitacion.update');
/*ruta para los documentos*/
Route::get('/documentos/{id}', [DocumentosController::class, 'create'])
->middleware('auth')
->name('documentos.create');
Route::put('/documentos-store/{id}', [DocumentosController::class, 'store'])
->middleware('auth')
->name('documentos.store');
Route::get('/documentos-regresar/{id}', [DocumentosController::class, 'regresar'])
->middleware('auth')
->name('documentos.regresar');
Route::get('/documentos-anexos/{id}', [DocumentosController::class, 'anexos'])
->middleware('auth')
->name('documentos.anexos');
Route::get('/documentos-aplica/{id}', [DocumentosController::class, 'aplicavista'])
->middleware('auth')
->name('documentos.aplica');
Route::put('/documentos-aplica-store/{id}', [DocumentosController::class, 'aplica'])
->middleware('auth')
->name('documentos.aplica-store');
/*rutas para los usuarios*/
Route::get('/usuarios',[UsuariosController::class,'index'])
->middleware('auth')
->name('usuarios.index');
Route::get('/usuarios-create', [UsuariosController::class, 'create'])
->middleware('auth')
->name('usuarios.create'); 
Route::post('/usuarios-store', [UsuariosController::class, 'store'])
->middleware('auth')
->name('usuarios.store');
Route::get('/usuarios-edit/{id}', [UsuariosController::class, 'edit'])
->middleware('auth')
->name('usuarios.edit');
Route::put('/usuarios-update/{id}', [UsuariosController::class, 'update'])
->middleware('auth')
->name('usuarios.update');
Route::delete('/usuarios-delete/{id}',[UsuariosController::class,'destroy'])
->middleware('auth')
->name('usuarios.delete');
/*rutas para las descargas*/
Route::get('/descargar',[DescargarController::class,'download_all'])
->middleware('auth')
->name('descargar.all');
Route::get('/descargar-licitacion/{id}',[DescargarController::class,'donwload_licitacion'])
->middleware('auth')
->name('descargar.licitacion');