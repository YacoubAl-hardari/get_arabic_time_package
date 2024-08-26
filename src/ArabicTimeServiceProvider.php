<?php

namespace GetArabicTimePackage\ArabicTime;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ArabicTimeServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind the class into the service container if needed
        $this->app->singleton(ArabicTime::class, function ($app) {
            return new ArabicTime();
        });
    }

    public function boot()
    {
        // Register the Blade directive
        Blade::directive('arabicTime', function ($expression) {
            return "<?php echo \\GetArabicTimePackage\\ArabicTime\\ArabicTime::getArabicTime($expression); ?>";
        });
    }
}
