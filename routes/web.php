<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

Route::get('/menu', [DrinkController::class, 'menu'])->name('menu');
Route::get('/', function () {
    return redirect()->route('menu');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
