<?php

namespace user;

use db\Database;

include_once '../../frame/Database.php';

class Users extends Database
{
    public function GetUsers()
    {
        $sql = "SELECT * FROM `users`";
        return $this->select($sql);
    }
}

$user = new Users();
$user->GetUsers();
?>