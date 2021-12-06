<?php

namespace Mardini\PhpLoginMvc\App;

use PDO;

class Db
{
    public static function getConnection(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=php_login_mvc', 'root', '');
    }
}
