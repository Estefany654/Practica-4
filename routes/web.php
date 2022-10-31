<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculosController;
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

Route::get('/fibonacci', function () {
    return view('fibonacci');
});

Route::get('/NumeroPalabras',function(){
    return view('NumeroPalabras');
});

Route::get('/NumeroVocales',function(){
    return view('NumeroVocales');
});
 
Route::post('calcularFibonacci',[CalculosController::class, 'fibonacci'])->name('fibonacci');

Route::post('contarNumeroPalabras',[CalculosController::class, 'NumeroPalabras'])->name('NumeroPalabras');

Route::post('contarNumeroVocales',[CalculosController::class, 'NumeroVocales'])->name('NumeroVocales');
