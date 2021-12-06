<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mardini\PhpLoginMvc\Middlewares\AuthMiddleware;
use Mardini\PhpLoginMvc\Controllers\HomeController;
use Mardini\PhpLoginMvc\Controllers\LoginController;
use Mardini\PhpLoginMvc\Controllers\RegisterController;
use Mardini\PhpLoginMvc\App\Route;
use Mardini\PhpLoginMvc\Controllers\LogoutController;
use Mardini\PhpLoginMvc\Middlewares\HasLoginMiddleware;

Route::add('GET', '/', HomeController::class, 'index', [AuthMiddleware::class]);

Route::add('GET', '/login', LoginController::class, 'index', [HasLoginMiddleware::class]);
Route::add('POST', '/login', LoginController::class, 'login');

Route::add('GET', '/register', RegisterController::class, 'index', [HasLoginMiddleware::class]);
Route::add('POST', '/register', RegisterController::class, 'add');

Route::add('GET', '/logout', LogoutController::class, 'destroy');

Route::run();
