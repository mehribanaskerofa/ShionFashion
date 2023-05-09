<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Product;
use App\Models\SosialMedia;
use App\Models\Category;
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
        $categories3=Category::limit(3)->get();
        $products8=Product::with('category')->limit(8)->get();
        $contact=Contact::where('id',1)->first();
        $headPage=Page::where('slug','head')->first();
        $aboutPage=Page::where('slug','about')->first();
        View::share([
            'menuList'=>$menuList,
            'sosialmedia'=>$sosialmedia,
            'contact'=>$contact,
            'categories3'=>$categories3,
            'headPage'=>$headPage,
            'aboutPage'=>$aboutPage,
            'products8'=>$products8
        ]);
    }
}
