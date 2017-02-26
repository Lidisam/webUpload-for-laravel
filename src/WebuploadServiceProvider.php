<?php namespace Lisam\Webupload;

use Illuminate\Support\ServiceProvider;

class WebuploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/webupload.php' => config_path('webupload.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['webupload'] = $this->app->share(function ($app) {
            return new Webupload();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['webupload'];
    }
}