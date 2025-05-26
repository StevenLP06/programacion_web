<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

//Rutas de Libros
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::post('/books',[BookController::class,'store'])->name('books.store');
Route::get('/books/{id}',[BookController::class,'edit'])->name('books.edit');
Route::put('/books/{id}',[BookController::class,'update'])->name('books.update');
Route::delete('/books/{id}',[BookController::class,'destroy'])->name('books.destroy');

//Rutas de Autores
Route::get('/authors',[AuthorController::class,'index'])->name('authors.index');
Route::post('/authors',[AuthorController::class,'store'])->name('authors.store');
Route::get('/authors/{id}',[AuthorController::class,'edit'])->name('authors.edit');
Route::put('authors/{id}',[AuthorController::class,'update'])->name('authors.update');
Route::delete('/auhtors/{id}',[AuthorController::class,'destroy'])->name('authors.destroy');


#Crea el sistema de rutas para Login, Registro...
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
