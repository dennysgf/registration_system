<?php

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

    Auth::routes();
    Route::resource('representantes',\App\Http\Controllers\RepresentanteController::class)->middleware('auth');
    Route::resource('profesores',App\Http\Controllers\ProfesoreController::class)->middleware('auth');
    Route::resource('estudiantes',\App\Http\Controllers\EstudianteController::class)->middleware('auth');
    Route::resource('parientes',\App\Http\Controllers\ParienteController::class)->middleware('auth');
    Route::resource('parientes-estudiante',\App\Http\Controllers\ParientesEstudianteController::class)->middleware('auth');
    Route::resource('direcciones-estudiante',\App\Http\Controllers\DireccionesEstudianteController::class)->middleware('auth');
    Route::resource('telefonos-estudiante',\App\Http\Controllers\TelefonosEstudianteController::class)->middleware('auth');
    Route::resource('direcciones-representante',\App\Http\Controllers\DireccionesRepresentanteController::class)->middleware('auth');
    Route::resource('telefonos-pariente',\App\Http\Controllers\TelefonosParienteController::class)->middleware('auth');
    Route::resource('direcciones-pariente',\App\Http\Controllers\DireccionesParienteController::class)->middleware('auth');
    Route::resource('telefonos-representante',\App\Http\Controllers\TelefonosRepresentanteController::class)->middleware('auth');
    Route::resource('paralelos',\App\Http\Controllers\ParaleloController::class)->middleware('auth');
    Route::resource('niveles',\App\Http\Controllers\NiveleController::class)->middleware('auth');
    Route::resource('periodos-academico',\App\Http\Controllers\PeriodosAcademicoController::class);
    Route::resource('especialidades',\App\Http\Controllers\EspecialidadeController::class)->middleware('auth');
    Route::resource('cursos',\App\Http\Controllers\CursoController::class)->middleware('auth');
    Route::resource('especialidades-curso',\App\Http\Controllers\EspecialidadesCursoController::class)->middleware('auth');
    Route::resource('matriculas',\App\Http\Controllers\MatriculaController::class)->middleware('auth');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
