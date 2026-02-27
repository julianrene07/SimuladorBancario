<?php

use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Route; 

Route::get('/', [TurnoController::class, 'index']);
Route::post('/generar-turno', [TurnoController::class, 'generar']);