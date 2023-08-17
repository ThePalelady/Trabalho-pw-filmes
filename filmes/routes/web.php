<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index'])->name('login');

Route::prefix('/usuario')->middleware('auth')->group(function () {
    Route::get('', [UsuariosController::class, 'index'])->name('usuario');

    Route::get('view', [UsuarioController::class, 'view'])->name('usuario.view');

    Route::get('add', [UsuarioController::class, 'add'])->name('usuario.add');

    Route::post('add', [UsuarioController::class, 'add']);

    Route::get('edit', [UsuarioController::class, 'edit'])->name('usuario.edit');

    Route::get('delete', [UsuarioController::class, 'delete'])->name('usuario.delete');

});
Route::get('login', [UsuarioController::class, 'login'])->name('login');
Route::post('login', [UsuarioController::class, 'login'])->name('login');

Route::get('logout', [UsuarioController::class, 'logout'])->name('logout');

