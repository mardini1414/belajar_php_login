<?php

namespace Mardini\PhpLoginMvc\Controllers;

use Mardini\PhpLoginMvc\App\View;
use Mardini\PhpLoginMvc\Model\Model;

class LoginController
{
    public function index(): void
    {
        View::render('login', []);
    }

    public function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = new Model();
        $datas = $login->getAllDataUser();

        foreach ($datas as $data) {
            if ($data['username'] == $username && password_verify($password, $data['password']) == true) {
                session_start();
                $_SESSION['username'] = $username;
                header('Location: /');
            }
        }
        $model = ['status' => 'failed'];
        View::render('login', $model);
    }
}
