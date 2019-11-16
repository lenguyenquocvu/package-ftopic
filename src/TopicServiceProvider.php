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
        $this->publishViews();
        $this->publishAssets();
        $this->publishMigrations();
        $this->publishSeeders();
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
        $this->app->make('Fteam\Topic\Controllers\StudentOrTeacherController');
        $this->app->make('Fteam\Topic\Controllers\TeacherController');
    }

    public function publishViews(){
       $this->publishes([__DIR__.'/Views' => base_path('resources/views/vendor/topic'),]);
    }

    public function publishAssets(){
        $this->publishes([__DIR__ .'/public/student' => base_path('public/packages/student')]);
    }

    public function publishMigrations(){
        $this->publishes([__DIR__.'/database/migrations' => $this->app->databasePath() . '/migrations',]);
    }

    public function publishSeeders(){
        $this->publishes([__DIR__.'/database/seeds' => $this->app->databasePath() . '/seeds',]);
    }
}
