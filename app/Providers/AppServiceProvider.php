<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Menu;
use App\Models\SosialMedia;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menuList=Menu::all();
        $sosialmedia=SosialMedia::all();
        $contact=Contact::where('id',1)->first();
        View::share([
            'menuList'=>$menuList,
            'sosialmedia'=>$sosialmedia,
            'contact'=>$contact
        ]);
    }
}
