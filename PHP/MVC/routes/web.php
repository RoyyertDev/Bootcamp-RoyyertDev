<?php

use Config\Route;
use Controllers\EstudianteController;

Route::get('/login', [EstudianteController::class, 'create']);
Route::get('/logout', [EstudianteController::class, 'logout']);
Route::get('/index', [EstudianteController::class, 'index']);
Route::get('/register', [EstudianteController::class, 'showRegister']);
Route::post('/create', [EstudianteController::class, 'store']);
Route::post('/logear', [EstudianteController::class, 'login']);
Route::dispatch();