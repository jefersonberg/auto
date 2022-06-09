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

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::post('/login', [\App\Http\Controllers\UsuarioController::Class, 'login'])->name('site.login');

Route::post('/login/recuperar_senha', [\App\Http\Controllers\UsuarioController::Class, 'recuperarSenha'])->name('site.recuperarSenha');

