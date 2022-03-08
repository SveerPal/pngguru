<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Image_Category;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;
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
        Schema::defaultStringLength(191);
	$navbarcategory = Image_Category::with('children')->whereNull('parent_id')->get();
	$searchcategories = Image_Category::select('id','name')->whereNull('parent_id')->get();
	//echo '<pre>';
	//var_dump($navbarcategory);
	View::share('navbarcategory', $navbarcategory);
	View::share('searchcategories', $searchcategories);
        // View::share('company',$company);  
        
    }
}
