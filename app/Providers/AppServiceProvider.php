<?php

namespace App\Providers;

use App\Core\Adapters\Theme;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws Throwable
     */
    public function boot()
    {
//        $theme = theme();
//
//        // Share theme adapter class
//        View::share('theme', $theme);
//
//        // Set demo globally
//        $theme->setTheme(request()->input('theme', 'theme1'));
////         $theme->setTheme('theme2');
//
//        $theme->initConfig();
//
//        bootstrap()->run();
//
//        if (isRTL()) {
//            // RTL html attributes
//            Theme::addHtmlAttribute('html', 'dir', 'rtl');
//            Theme::addHtmlAttribute('html', 'direction', 'rtl');
//            Theme::addHtmlAttribute('html', 'style', 'direction:rtl;');
//        }
    }
}
