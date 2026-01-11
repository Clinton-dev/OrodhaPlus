<?php

use App\Models\Board;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/board/{board}', function (Board $board) {
    return view('boards.index', ['board' => $board, 'tasks' => $board->tasks()->get()]);
});
