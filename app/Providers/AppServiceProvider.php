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
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        if (!app()->runningInConsole()) {
            View::composer('*', function ($view) {
                try {
                    if (!isset($view->getData()['categories'])) {
                        $view->with('categories', Category::where('status', 'active')->orderBy('name')->get());
                    }
                    if (!isset($view->getData()['category'])) {
                        $view->with('category', null);
                    }
                } catch (\Exception $e) {
                    $view->with('categories', collect());
                }
            });

            View::composer('components.notification-modal', function ($view) {
                try {
                    $view->with('userOrders', auth()->check()
                        ? \App\Models\Order::where('user_id', auth()->id())->latest()->take(5)->get()
                        : collect());
                } catch (\Exception $e) {
                    $view->with('userOrders', collect());
                }
            });
        }
    }
}
