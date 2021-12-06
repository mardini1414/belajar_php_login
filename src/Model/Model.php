<?php

namespace Mardini\PhpLoginMvc\Model;

use Mardini\PhpLoginMvc\App\Db;
use PDOException;

class Model
{

    public bool $success = true;

    public function getAllDataUser(): array
    {
        $connect = new Db();
        $query = "SELECT * from user";

        try {
            $data = $connect->getConnection()->query($query)->fetchAll();
        } catch (PDOException $e) {
            echo 'error' . $e->getMessage();
        }

        $connect = null;

        return $data;
    }

    public function addDataUser(string $name, string $username, string $password): void
    {
        $connect = new Db();
        $query = "INSERT INTO user(name, username, password) VALUE(?, ?, ?)";

        try {
            $statment = $connect->getConnection()->prepare($query);
            $statment->execute([$name, $username, password_hash($password, PASSWORD_BCRYPT)]);

            $this->success = true;
        } catch (PDOException $e) {
            $this->success = false;
            $e->getMessage();
        }

        $connect = null;
    }
}
