<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthControllerWid;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/index', [UsuarioController::class, 'index']);
route::get('/show', [UsuarioController::class, 'show']);
route::get('/edit', [UsuarioController::class, 'edit']);
route::get('/update', [UsuarioController::class, 'update']);
route::get('/destroy', [UsuarioController::class, 'destroy']);

route::get('/usuario/create', [UsuarioController::class, 'create']);
route::post('/usuario/create', [UsuarioController::class, 'store']) -> name('user.store');
Route::get('/usuarios/list', [UsuarioController::class,'list']) -> name('user.list');
Route::get('/usuarios/update/{id}', [UsuarioController::class, 'edit']) -> name('user.update');
Route::put('/usuarios/update', [UsuarioController::class, 'update']) -> name('user.update.data');
Route::get('/usuarios/delete/{id}', [UsuarioController::class, 'destroy']) -> name('user.destroy');

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'login']) ->name('login');
//Route::get('/home', [AuthController::class, 'home']) -> name('home');

Route::get('/home', function(){
    return view('home');
})-> name('home');


Route::get('productos', [ProductoController::class, 'list']) -> name('prod.list');
Route::get('productos/create', [ProductoController::class, 'create']) -> name('prod.create');
Route::post('productos/create', [ProductoController::class, 'store']) -> name('prod.store');
Route::get('productos/update/{id}', [ProductoController::class, 'edit']) -> name('prod.update');
Route::put('productos/update', [ProductoController::class, 'update']) -> name('prod.update.data');
Route::get('productos/delete/{id}', [ProductoController::class, 'destroy']) -> name('prod.destroy');

//widdleware
Route::get('/loginwid', [AuthControllerWid::class, 'showLoginForm'])->name('loginwid');
Route::post('/loginwid', [AuthControllerWid::class, 'login']);
Route::post('/logoutwid', [AuthControllerWid::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
