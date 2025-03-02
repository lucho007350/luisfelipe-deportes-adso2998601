<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formulariocontrollador;
use App\Http\Controllers\informacioncontrollador;

Route::get('/', function () {
    return view('vistas.index');
});

route::resource('formulario', formularioControllador::class);
route::resource('informacion', informacionControllador::class);