<?php

namespace App\Providers;

use App\Models\Category;
use App\Services\CartService;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registro do serviço "CartService" como singleton
        $this->app->singleton(CartService::class, function ($app) {
            return new CartService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('categories', Category::where('status', 'active')->orderBy('name')->get());

        View::composer('components.notification-modal', function ($view) {
            if (auth()->check()) {
                $view->with('userOrders', \App\Models\Order::where('user_id', auth()->id())->latest()->take(5)->get());
            } else {
                $view->with('userOrders', collect());
            }
        });
    }
}
