<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get ('/', HomeController::class);
Route::get ('curso', [CursosController::class, "index"]);
Route::get ('cursos/create', [CursosController::class, "create"]);
Route::get ('cursos/{curso}', [CursosController::class, "show"]);


