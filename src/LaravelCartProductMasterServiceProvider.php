<?php

namespace OrangeBitsIndia\LaravelCartProductMaster;

use Illuminate\Support\ServiceProvider;

class LaravelCartProductMasterServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->publishes([
        //     __DIR__.'/../database/migrations/2019_08_01_000100_create_products_table.php' => config_path('laravel_cart_product_master.php'),
        // ], 'laravel-cart-product-master');
         
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        // $this->mergeConfigFrom(
        //     __DIR__.'/../config/laravel_cart_product_master.php',
        //     'laravel_cart_product_master'
        // );
    }
}
?>

