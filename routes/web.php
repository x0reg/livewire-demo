<?php

use App\Livewire\User\Auth\Login;
use App\Livewire\User\Auth\Logout;
use App\Livewire\User\Auth\Register;
use App\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
    Route::get("/", Dashboard::class)->name('index');
    Route::get("/logout", Logout::class)->name('logout');
});

Route::prefix('auth')->group(function () {
    Route::get("/login", Login::class)->name('login');
    Route::get("/register", Register::class)->name('register');
});
