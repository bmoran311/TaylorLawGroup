<?php

use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\BioController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\AdminUserController;
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
use App\Http\Controllers\Admin\ContactController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('site.home');
Route::get('/attorneys', [PageController::class, 'attorneys'])->name('site.attorneys');
Route::get('/attorneys/{letter}', [PageController::class, 'attorneys'])->name('site.attorneys_letter');
Route::get('/attorney-detail/{bio_id}', [PageController::class, 'attorney_detail'])->name('site.attorney-detail');
Route::get('/our-firm', [PageController::class, 'our_firm'])->name('site.our-firm');
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('site.privacy-policy');
Route::get('/accessibility', [PageController::class, 'accessibility'])->name('site.accessibility');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('site.disclaimer');
Route::get('/terms-of-use', [PageController::class, 'terms_of_use'])->name('site.terms-of-use');
Route::get('/news', [PageController::class, 'news'])->name('site.news');
Route::get('/events', [PageController::class, 'events'])->name('site.events');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('site.testimonials');
Route::get('/faqs', [PageController::class, 'faqs'])->name('site.faqs');
Route::get('/practice-areas', [PageController::class, 'practice_areas'])->name('site.practice-areas');
Route::get('/practice-area/{practice_area_id}', [PageController::class, 'practice_area'])->name('site.practice-area');
Route::get('/resources', [PageController::class, 'resources'])->name('site.resources');
Route::get('/blog', [PageController::class, 'blog'])->name('site.blog');
Route::get('/blog-detail/{blog_id}', [PageController::class, 'blog_detail'])->name('site.blog-detail');
Route::get('/testimonial-detail/{testimonial_id}', [PageController::class, 'testimonial_detail'])->name('site.testimonial-detail');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

require __DIR__.'/auth.php';

Route::prefix('dashboard')->group(function()
{
    Route::middleware(['auth'])->group(function()
    {
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

    Route::resource('admin_user', AdminUserController::class);
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
    Route::resource('contact', ContactController::class);
    Route::get('/blog_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\BlogCategoryController@sort')->name('orderBlogCategory');
    Route::get('/faq_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\FaqCategoryController@sort')->name('orderFaqCategory');
    Route::get('/resource_category/order/{direction}/{id}/{currPos}', 'App\Http\Controllers\Admin\ResourceCategoryController@sort')->name('orderResourceCategory');
});




