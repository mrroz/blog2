<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;





Route::get('/',[PostController::class,'index'])->name('post.index');

// Route::get('/panel',[PostController::class,'panel'])->middleware(['auth'])->name('post.dashboard');
// Route::get('/panel',[PostController::class,'panel'])->name('post.panel');

Route::get('/panel2',[PostController::class,'panel2'])->middleware(['auth'])->name('post.panel2');


Route::post('/panel',[PostController::class,'create'])->middleware(['auth'])->name('post.create');

Route::get('/panel/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('post.destroy');


// Route::get('/panel/delete',[PostController::class,'delete'])->name('post.delete');






require __DIR__.'/auth.php';
