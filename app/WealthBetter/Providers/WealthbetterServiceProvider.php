<?php
/**
 * Created by PhpStorm.
 * User: Daimon
 * Date: 2017/7/6
 * Time: 10:42
 */

namespace Wealthbetter\Providers;

use Illuminate\Support\ServiceProvider;

class WealthbetterServiceProvider extends ServiceProvider {

    public function boot()
    {
        //
    }

    public function register()
    {
        //Repository 实现绑定
//        $Repositories = array(
//            'User',
//            'Product',
//        );
//
//        foreach ($Repositories as $repository) {
//            $this->app->bind("Wealthbetter\\Contracts\\{$repository}Interface", "Wealthbetter\\Repositories\\{$repository}Repository");
//        }

        //Validator 实现绑定

    }

}