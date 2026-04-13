<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/login',[App\Http\Controllers\UsuarioController::class,'login']);
Route::post('/todos',[App\Http\Controllers\Todos::class,'criar']);
