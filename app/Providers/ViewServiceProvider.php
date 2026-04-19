<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactDetail;
use App\Models\Logo;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['layouts.partials.header', 'layouts.partials.footer'], function ($view) {
            
            $contact = ContactDetail::first();
            $logo = Logo::first();

            $view->with([
                'contact' => $contact,
                'logo' => $logo,
            ]);
        });
    }
}
