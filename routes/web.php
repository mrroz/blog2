<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;





Route::get('/',[PostController::class,'index'])->name('post.index');

// Route::get('/panel',[PostController::class,'panel'])->middleware(['auth'])->name('post.dashboard');
Route::get('/panel',[PostController::class,'panel'])->name('post.panel');


Route::post('/panel',[PostController::class,'create'])->name('post.create');

Route::get('/panel/delete',[PostController::class,'delete'])->name('post.delete');

Route::get('/panel/{id}',[PostController::class,'destroy'])->name('post.destroy');




require __DIR__.'/auth.php';
