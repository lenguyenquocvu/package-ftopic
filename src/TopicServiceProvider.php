<?php

namespace Fteam\Topic;

use Illuminate\Support\ServiceProvider;

class TopicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__ . '/Views', 'topic');
        // $this->publishViews();
        $this->publishAssets();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__ . '/routes/web.php';
        $this->app->make('Fteam\Topic\Controllers\TopicController');
    }

    public function publishViews(){
       $this->publishes([__DIR__.'/Views' => base_path('resources/views/vendor/topic'),]);
    }

    public function publishAssets(){
        $this->publishes([__DIR__ .'/public/student' => base_path('public/packages/student')]);
    }
}
