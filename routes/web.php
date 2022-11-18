<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/',[PostController::class,'index']);
Route::post('/create',[PostController::class,'create']);
Route::post('/update/{id}',[PostController::class,'update'])->name('post.update');
Route::post('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
