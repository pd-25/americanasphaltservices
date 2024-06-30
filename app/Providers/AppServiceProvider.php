<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Offer;
use App\Models\PartnerLogo;
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
        View::composer('*', function ($view) {
            $contactInfo = Offer::first(); // Retrieve contact info
            $partnerlogos = PartnerLogo::all(); // Retrieve partner logos

            $view->with('contactInfo', $contactInfo)
                 ->with('partnerlogos', $partnerlogos); // Share both variables
        });
    }
}
