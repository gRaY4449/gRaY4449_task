<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', App\Http\Controllers\TaskController::class);
// リソースを使用しない場合
// Please change memo into task!!!!!!!!
// Route::get('/memos', [App\Http\Controllers\TaskController::class, 'index']);
// Route::get('/memos/create', [App\Http\Controllers\TaskController::class, 'create']);
// Route::post('/memos', [App\Http\Controllers\TaskController::class, 'store']);
// Route::get('/memos/{memo}', [App\Http\Controllers\TaskController::class, 'show']);
// Route::get('/memos/{memo}/edit', [App\Http\Controllers\TaskController::class, 'edit']);
// Route::patch('/memos/{memo}', [App\Http\Controllers\TaskController::class, 'update']);
// Route::delete('/memos/{memo}', [App\Http\Controllers\TaskController::class, 'destroy']);
