<?php

namespace user;

use db\Database;
use form\Form;

include_once '../../frame/Database.php';
include_once 'form.php';

class Users extends Database
{
    public $username;
    public $email;
    public $password;


    public function GetUsers()
    {
        $sql = "SELECT * FROM `users`";
        return $this->select($sql);
    }

    public function SetNewUser()
    {
        $this->username = $_POST['username'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $sql = "INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$this->username', '$this->email', '$this->password')";
        var_dump($this->deleteInsert($sql));
    }

}

$user = new Users();
$user->GetUsers();
$form->RegForm();
$user->SetNewUser();
?>