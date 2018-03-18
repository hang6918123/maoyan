<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Links;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = Links::all();
		view()->share('links',$data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
