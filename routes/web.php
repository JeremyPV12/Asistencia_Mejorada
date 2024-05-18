<?php

use App\Http\Controllers\AsistenciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('asistencia', AsistenciaController::class);
