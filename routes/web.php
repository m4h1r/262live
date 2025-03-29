<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\BackEndController;

Route::get('/menu', [DrinkController::class, 'menu'])->name('menu');
Route::get('/', function () {
    return redirect()->route('menu');
});

Route::get('dashboard', function () {
    return redirect()->route('drinks');
})->name('dashboard');


Route::middleware('auth')->group(function () {

    // Route::get('/dashboard', [BackEndController::class, 'dashboard'])->name('dashboard');

    Route::get('drinks', [DrinkController::class, 'index'])->name('drinks');
    Route::get('add', [DrinkController::class, 'create'])->name('add');
    Route::post('insert', [DrinkController::class, 'store'])->name('insert');
    Route::delete('drink/{drink}', [DrinkController::class, 'destroy'])->name('drink.destroy');
    Route::get('drink/edit/{id}', [DrinkController::class, 'edit'])->name('drink.edit');
    Route::put('update-drink/{id}', [DrinkController::class, 'update'])->name('drink.update');
    // Route::delete('adages/{adage}', [AdageController::class, 'destroy'])->name('adage.destroy');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
