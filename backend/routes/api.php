<?php

use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('getCurso');
Route::get('/cursos', [CursoController::class, 'index'])->name('getCursos');
