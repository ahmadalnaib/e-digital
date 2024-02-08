<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
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
    //
    View::composer('*', function ($view) {
      $view->with('cart', Cart::bySession()->first());
    });

    Blade::directive('money', function ($expression) {
      return "<?php  echo Laravel\Cashier\Cashier::formatAmount($expression,config('cashier.currency')); ?>";
    });
  }
}
