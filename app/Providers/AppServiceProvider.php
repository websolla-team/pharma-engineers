<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->runningInConsole()) {
            return;
        }

        View::share([
            'Contact'  => Contact::first(),
            'About'    => Page::first(),
            'Setting'  => Setting::first(),
            'Pages'    => Page::where('id', '!=', 1)->get(['id', 'title']),
            'Services' => Service::all(),
            // 'Categories' => Category::with('subCategories')->latest()->get(),
            'Galleries' => Gallery::latest()->get(),
        ]);
    }
}
