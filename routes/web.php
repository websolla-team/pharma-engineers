<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::get('/websolla-db', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        require __DIR__ . '/auth.php';

        // admin dashboard
        Route::prefix('websolla-db')->middleware(['auth'])->group(function () {
            Route::resource('/sliders', SliderController::class);
            Route::resource('/pages', PageController::class);
            Route::resource('/services', ServiceController::class);
            Route::resource('/blogs', BlogController::class);
            Route::resource('/categories', CategoryController::class);
            Route::resource('/galleries', GalleryController::class);
            Route::resource('/brands', BrandController::class);
            Route::resource('/reviews', ReviewController::class);
            Route::resource('/settings', SettingController::class);
            Route::resource('/messages', MessageController::class);
            Route::resource('/newsletters', NewsletterController::class);
            Route::resource('/courses', CoursesController::class);
            Route::resource('/question', QuestionsController::class);
            Route::get('/contact', [ContactController::class, 'index'])->name('contact');
            Route::post('/contact', [ContactController::class, 'update'])->name('contact.update');
            Route::get('/social', [ContactController::class, 'social'])->name('social');
            Route::post('/social', [ContactController::class, 'updateSocial'])->name('social.update');
        });

        // website
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [HomeController::class, 'page'])->name('about');
        Route::get('/services', [HomeController::class, 'services'])->name('services');
        Route::get('/service/{id}/{slug?}', [HomeController::class, 'serviceDetails'])->name('service.details');
        Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
        Route::get('/gallery/{id}/{slug?}', [HomeController::class, 'galleryDetails'])->name('gallery.details');
        Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
        Route::get('/blog/{id}/{slug?}', [HomeController::class, 'blogDetails'])->name('blog.details');
        Route::get('/page/{id}/{slug?}', [HomeController::class, 'page'])->name('page');
        Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
        Route::post('/contacts/meassage', [MailController::class, 'sendMail'])->name('contact.mail');
        Route::post('/subscribe', [MailController::class, 'subscribe'])->name('subscribe');
    }
);
