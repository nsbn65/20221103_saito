<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/',[PostController::class,'index']);//一覧表示
/*
Route::post('/create',[PostController::class,'create']);//タスク追加
Route::post('/update',[PostController::class,'update']);//タスク更新
Route::delete('/delete',[PostController::class,'delete']);//タスク削除
*/
Route::get('/find', [PostController::class, 'find']);
Route::post('/find', [PostController::class, 'search']);
Route::get('/add', [PostController::class, 'add']);
Route::post('/add', [PostController::class, 'create']);
Route::get('/edit', [PostController::class, 'edit']);
Route::post('/edit', [PostController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);