<?php


namespace alapi\XhPay;

use Illuminate\Support\ServiceProvider;

/**
 * Class XhPayServiceProvider
 * @author alone88
 * @link https://www.alapi.cn
 * @package alapi\XhPay
 */
class XhPayServiceProvider extends ServiceProvider
{
    public function boot(){
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../config/xhpay.php' => config_path('xhpay.php'),
            ], 'xhpay.config');
        }
    }

    public function register(){
        $this->mergeConfigFrom(__DIR__.'/../config/xhpay.php', 'xhpay');

        // Register the service the package provides.
        $this->app->singleton('xhpay', function ($app) {
            return new XhPay;
        });
    }

    public function provides()
    {
        return ['xhpay'];
    }
}