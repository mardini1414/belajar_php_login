<?php

namespace Mardini\PhpLoginMvc\Middlewares;

class HasLoginMiddleware implements Middlewares
{
    public function before(): void
    {
        session_start();
        if (isset($_SESSION['username'])) {
            header('Location: /');
            exit();
        }
    }
}
