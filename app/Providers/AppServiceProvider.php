<?php

namespace App\Providers;

use http\Url;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      if(env('FORCE_HTTPS', false)) {
        URL::forceSchema('https');
      }
    }
}
