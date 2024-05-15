<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('paciente', 'App\Http\Controllers\PacienteController');
Route::resource('medico', 'App\Http\Controllers\MedicoController');
Route::resource('atendimento', 'App\Http\Controllers\AtendimentoController');
