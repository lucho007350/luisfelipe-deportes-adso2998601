<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\primercontrollador;
use App\Http\Controllers\segundocontrollador;

Route::get('/', function () {
    return view('vistas.index');
});

route::resource('primer', primerControllador::class);
route::resource('segundo', segundoControllador::class);