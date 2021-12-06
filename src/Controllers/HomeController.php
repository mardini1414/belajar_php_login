<?php

namespace Mardini\PhpLoginMvc\Controllers;

use Mardini\PhpLoginMvc\App\View;

class HomeController
{
    public function index(): void
    {

        $model = [
            'name' => $_SESSION['username']
        ];

        View::render('index', $model);
    }
}
