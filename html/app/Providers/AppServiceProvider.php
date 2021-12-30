<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('App\Services\Admin\BlogServiceInterface', 'App\Services\Admin\BlogService');
        $this->app->bind('App\Services\Client\BlogServiceInterface', 'App\Services\Client\BlogService');
        $this->app->bind('App\Services\Admin\SurveyServiceInterface', 'App\Services\Admin\SurveyService');
        $this->app->bind('App\Services\Client\SurveyServiceInterface', 'App\Services\Client\SurveyService');
    }
}
