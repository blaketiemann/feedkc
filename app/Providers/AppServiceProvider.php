<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('inline', function () {
            return "<?php echo 'inline-template'; ?>";
        });
        Blade::directive('inlineWhen', function ($expression) {
            return "<?php echo ({$expression}) ? 'inline-template' : ''; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
