<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\Admin\MembershipController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\EducationController;
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

Route::resource('bio', LanguageController::class);
Route::resource('language', LanguageController::class);
Route::resource('award', AwardController::class);
Route::resource('level', LevelController::class);
Route::resource('license', LicenseController::class);
Route::resource('membership', MembershipController::class);
Route::resource('admission', AdmissionController::class);
Route::resource('education', EducationController::class);

Route::resource('engagement', LanguageController::class, ['as' => 'engagement']);
Route::get('engagement', [LanguageController::class, 'index'])->name('engagement');
Route::resource('news', LanguageController::class, ['as' => 'news']);
Route::get('news', [LanguageController::class, 'index'])->name('news');

require __DIR__.'/auth.php';
