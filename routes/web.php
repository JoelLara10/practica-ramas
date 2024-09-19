<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/index', [UsuarioController::class, 'index']);
route::get('/create', [UsuarioController::class, 'create']);
route::get('/store', [UsuarioController::class, 'store']);
route::get('/show', [UsuarioController::class, 'show']);
route::get('/edit', [UsuarioController::class, 'edit']);
route::get('/update', [UsuarioController::class, 'update']);
route::get('/destroy', [UsuarioController::class, 'destroy']);
