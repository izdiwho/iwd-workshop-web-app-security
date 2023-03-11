<?php

use Illuminate\Support\Facades\Route;

// return index note
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

// notes routes
Route::get('/', [App\Http\Controllers\NoteController::class, 'notes'])->name('notes.index');
Route::get('/notes', function() {
    return redirect()->route('notes.index');
});
Route::get('/notes/create', [App\Http\Controllers\NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/store', [App\Http\Controllers\NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/{id}', [App\Http\Controllers\NoteController::class, 'view'])->name('notes.view');
Route::get('/notes/{id}/delete', [App\Http\Controllers\NoteController::class, 'delete'])->name('notes.delete');

