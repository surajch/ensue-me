<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApiRouteServiceProvider extends ServiceProvider {

    protected $namespace = 'App\Http\Api\V1\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  Router  $router
     * @return void
     */
    public function boot(Router $router) {
        //

        parent::boot($router);  
    }

    public function map(\Dingo\Api\Routing\Router $api) {

        $api->version(['version' => 'v1','namespace'=>  $this->namespace], function($api) {
            $api->group(['prefix' => 'api'], function ($api) {

                //return require app_path('Api/Http/routes.php');
            });
        });
    }

}
