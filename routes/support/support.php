<?php

use App\Http\Controllers\Admin\NavigationController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function(Router $router) {

    $router->get('/roles', [NavigationController::class, 'role'])->name('support.roles');

});
