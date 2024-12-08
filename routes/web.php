<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/form-elements', function () {
    return view('form-elements');
})->middleware(['auth', 'verified'])->name('form-elements');

Route::get('/dashboard/form-layout', function () {
    return view('form-layout');
})->middleware(['auth', 'verified'])->name('form-layout');

Route::get('/dashboard/tables', function () {
    return view('tables');
})->middleware(['auth', 'verified'])->name('tables');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('news', LanguageController::class, ['as' => 'bio']);
Route::get('bio', [LanguageController::class, 'index'])->name('bio');
Route::resource('language', LanguageController::class);
Route::resource('award', LanguageController::class, ['as' => 'award']);
Route::get('award', [LanguageController::class, 'index'])->name('award');
Route::resource('education', LanguageController::class, ['as' => 'education']);
Route::get('education', [LanguageController::class, 'index'])->name('education');
Route::resource('license', LanguageController::class, ['as' => 'license']);
Route::get('license', [LanguageController::class, 'index'])->name('license');
Route::resource('membership', LanguageController::class, ['as' => 'membership']);
Route::get('membership', [LanguageController::class, 'index'])->name('membership');
Route::resource('engagement', LanguageController::class, ['as' => 'engagement']);
Route::get('engagement', [LanguageController::class, 'index'])->name('engagement');
Route::resource('news', LanguageController::class, ['as' => 'news']);
Route::get('news', [LanguageController::class, 'index'])->name('news');

require __DIR__.'/auth.php';
