<?php

namespace App\Packages\SpeechToText;

use Illuminate\Support\ServiceProvider;

class SpeechToTextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('speech-to-text', function () {
            return new SpeechToText();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
