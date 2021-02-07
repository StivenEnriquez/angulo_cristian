<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\EditController;

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

Route::get('/', [inicioController::class, 'index']);
Route::get('libro/libro', [bookController::class, 'boock']);
Route::get('editorial/edit', [EditController::class, 'form_registro'])
    ->name('form_registro');



Route::get('editorial/registrar', [edit::class, 'form_registro'])
	->name('form_registroCli');

Route::post('editorial/registrar', [edit::class, 'registrar'])
	->name('editorial');

Route::get('editorial/actualizar/{id}', [edit::class, 'form_actualiza'])
	->name('form_actualizaCli');

Route::post('editorial/actualizar/{id}', [edit::class, 'actualizar'])
	->name('actualiza');

Route::get('editorial/eliminar/{id}', [edit::class, 'eliminar'])
	->name('elimina');

Route::get('editorial', [edit::class, 'index'])
	->name('listado_editorial');


    