<?php

namespace App\Providers;

use Blade;
use App\Services\Enum\Enum;
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
        $this->app->bind('Enum', function()
        {
           return new Enum;
        });
    }
}
