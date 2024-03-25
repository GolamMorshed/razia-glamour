<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        //define gates for different users
        //$this->registerPolicies();
        // Gate::define('view-admin-dashbaord',function($user){
        //     return $this->isAdmin();
        // });
    }
}
