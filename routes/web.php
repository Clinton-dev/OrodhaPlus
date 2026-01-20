<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/board/{board}', [BoardController::class, 'show'])->name('boards.show');

Route::post('/board/{board}/tasks', [TaskController::class, 'store'])->name('tasks.store');
