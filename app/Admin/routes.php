<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    //
    $router->get('/', 'HomeController@index');

    //新闻
    $router->resource('news', NewsController::class);
    $router->resource('newtypes', NewtypesController::class);

    //案例
    $router->resource('cases', CasesController::class);
    $router->resource('casetypes', CasetypesController::class);

    //团队
    $router->resource('teams', TeamsController::class);

    //轮播图
    $router->resource('carousels', CarouselsController::class);

    //首页我们的服务
    $router->resource('services', ServicesController::class);

    //服务流程
    $router->resource('flows', FlowsController::class);

    
});

