<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class , 'create'])->name('note.create');
Route::post('note/insert', [NoteController::class , 'insert'])->name('note.insert');
Route::get('note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
