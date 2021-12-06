<?php

namespace Mardini\PhpLoginMvc\Controllers;

class LogoutController
{
    public function destroy(): void
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
}
