<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $menu = ['Tin tuc 1', 'The thao', 'Quoc te'];
        View::share('menu', $menu);

        $list = [
            [
                'id' => 1,
                'name' => 'Học View trong Laravel',
                'status' => 0
            ],
            [
                'id' => 2,
                'name' => 'Học Route trong Laravel',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Làm bài tập View trong Laravel',
                'status' => -1
            ],
        ];
        View::share('list', $list);



    }
}