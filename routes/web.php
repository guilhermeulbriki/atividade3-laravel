<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\FuncionariosController;

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

Route::resource('cargos', CargosController::class);
Route::resource('funcionarios', FuncionariosController::class);
Route::get('/relatorios/funcionarios', 'App\Http\Controllers\CargosController@relatorio');
