<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\View;

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
        $productInCarts = User::find(1)->cartProducts; // Hoặc thay User::find(1) bằng cách lấy đúng user
        View::share('productInCarts', $productInCarts);
    }
}
