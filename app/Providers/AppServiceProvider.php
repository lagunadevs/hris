<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::bind('App\Deductions\TaxInterface','App\Deductions'.config('setting.country'));
        App::bind('App\Benefits\BenefitsInterface','App\Benefits'.config('setting.sss'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
