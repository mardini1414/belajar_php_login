<?php

namespace Mardini\PhpLoginMvc\Controllers;

use Mardini\PhpLoginMvc\App\View;
use Mardini\PhpLoginMvc\Model\Model;

class RegisterController
{
    public function index(): void
    {

        View::render('register', []);
    }

    public function add(): void
    {
        $user = new Model();
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        if (
            $name != null && $username != null && $password != null
            && $name != trim('') && $username != trim('') && $password != trim('')
        ) {
            $user->addDataUser($name, $username, $password);
            $model = ['success' => $user->success];
            View::render('register', $model);
            exit();
        }


        $model = ['success' => false];
        View::render('register', $model);
    }
}
