<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\TypesController;

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::get('/Case_Files', [FilesController::class, 'index']);

Route::get('/Crime_Types', [TypesController::class, 'index']);

Route::resource('Files', FilesController::class);

Route::resource('Types', TypesController::class);

// 'Files' dan 'Types' adalah model