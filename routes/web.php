<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServidorPublicoController;
use App\Models\servidorPublico;

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
    return view('modulos.index');
});

Route::get('/modulos', function () {
    return view('modulos.acerca_de');
});

Route::get('/modulos/radio', function () {
    return view('modulos.radiodifusora');
});

Route::get('/modulos/eventos', function () {
    return view('modulos.eventos');
});

Route::get('/modulos/dir', function () {
    return view('modulos.directorio');
});

Route::get('/modulos/cultura', function () {
    return view('modulos/servicios.cultura');
});

Route::get('/modulos/defensoria', function () {
    return view('modulos/servicios.defensoria');
});

Route::get('/modulos/derechos', function () {
    return view('modulos/servicios.derechos');
});

Route::get('/modulos/fomento', function () {
    return view('modulos/servicios.fomento');
});

Route::get('/modulos/medicina', function () {
    return view('modulos/servicios.medicina');
});

Route::get('/modulos/probipi', function () {
    return view('modulos/servicios.probipi');
});

/*Route::get('/index', function () {
    return view('modulos.index');
});

Route::get('/servidor/create',[ServidorPublicoController::class, 'create']);*/

Route::resource('servidor', ServidorPublicoController::class);