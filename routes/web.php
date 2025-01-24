<?php

use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\BioController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CareersController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\EngagementController;
use App\Http\Controllers\Admin\FirmController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\Admin\MembershipController;
use App\Http\Controllers\Admin\MultimediaController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PracticeAreaController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\ResourceCategoryController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('site.home');

Route::view('prototype/home', 'prototype.home')->name('site.prototype.home');
Route::view('prototype/attorney-detail', 'prototype.attorney-detail')->name('site.prototype.attorney-detail');
Route::view('prototype/attorney-member', 'prototype.attorneys-member')->name('site.prototype.attorneys-member');
Route::view('prototype/attorneys', 'prototype.attorneys')->name('site.prototype.attorneys');
Route::view('prototype/practice-areas', 'prototype.practice-areas')->name('site.prototype.practice-areas');


require __DIR__.'/auth.php';

Route::prefix('dashboard')->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');
    });


    Route::get('/form-elements', function () {
        return view('form-elements');
    })->name('form-elements');

    Route::get('/form-layout', function () {
        return view('form-layout');
    })->name('form-layout');

    Route::get('/tables', function () {
        return view('tables');
    })->name('tables');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('career', CareersController::class);
    Route::resource('firm', FirmController::class);
    Route::resource('bio', BioController::class);
    Route::resource('practice_area', PracticeAreaController::class);
    Route::resource('language', LanguageController::class);
    Route::resource('award', AwardController::class);
    Route::resource('level', LevelController::class);
    Route::resource('license', LicenseController::class);
    Route::resource('membership', MembershipController::class);
    Route::resource('admission', AdmissionController::class);
    Route::resource('education', EducationController::class);
    Route::resource('news', NewsController::class);
    Route::resource('engagement', EngagementController::class);
    Route::resource('multimedia', MultimediaController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('faq_category', FaqCategoryController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('blog_post', BlogPostController::class);
    Route::resource('blog_category', BlogCategoryController::class);
    Route::resource('resource', ResourceController::class);
    Route::resource('resource_category', ResourceCategoryController::class);
    Route::get('/blog_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\BlogCategoryController@sort')->name('orderBlogCategory');
    Route::get('/faq_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\FaqCategoryController@sort')->name('orderFaqCategory');
    Route::get('/resource_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\ResourceCategoryController@sort')->name('orderResourceCategory');
});




