<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route manual untuk show member (sesuai permintaan tugas /member/{id})
Route::get('/member/{id}', [MemberController::class, 'show'])->name('members.show');

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class)->except(['show']);

// TAMBAHKAN ->except(['show']) DI SINI AGAR TIDAK BENTROK
Route::resource('members', MemberController::class)->except(['show']);

Route::resource('loans', LoanController::class);
Route::put('/loans/{id}/kembalikan', [LoanController::class, 'kembalikan'])
    ->name('loans.kembalikan');