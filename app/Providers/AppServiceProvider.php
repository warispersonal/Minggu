<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Harimayco\Menu\Facades\Menu;
use App\Models\Settings;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {

            $mainMenu = Menu::getByName('Main Menu');
            $themeSettings = [];
            $themeSettings['themeBG'] = Settings::where('key' , 'themeBG')->get('value')[0]->value;
            $themeSettings['themeMenuBG'] = Settings::where('key' , 'themeMenuBG')->get('value')[0]->value;
            $themeSettings['themePageBG'] = Settings::where('key' , 'themePageBG')->get('value')[0]->value;
            $themeSettings['desktopImage'] = Settings::where('key' , 'desktop-image')->get('value')[0]->value;
            $themeSettings['mobileImage'] = Settings::where('key' , 'mobile-image')->get('value')[0]->value;                                 

            $view->with(['headerMenu' => $mainMenu , 'themeSettings' => $themeSettings]);
        });
    }
}
