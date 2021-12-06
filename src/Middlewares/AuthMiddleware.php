<?php

namespace Mardini\PhpLoginMvc\Middlewares;

use Mardini\PhpLoginMvc\Middlewares\Middlewares;

class AuthMiddleware implements Middlewares
{
    public function before(): void
    {
        session_start();
        if (!isset($_SESSION['username'])) {
            header('Location: /login');
            exit();
        }
    }
}
