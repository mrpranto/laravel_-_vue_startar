<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;


Route::redirect('/', url('login'));

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (Router $router){

    $router->get('/dashboard', [HomeController::class, '__invoke'])->name('dashboard');

});

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'support.'], function (Router $router){

    include __DIR__.'/support/support.php';

});




