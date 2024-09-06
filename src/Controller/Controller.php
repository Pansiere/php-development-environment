<?php

namespace Pansiere\Env\Controller;

use Pansiere\Env\Database\Database;

class Controller
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::createConnection();
    }

    public function admin()
    {
        require __DIR__ . "/../view/admin.php";
    }

    public function home()
    {
        require __DIR__ . "/../view/home.php";
    }
}
