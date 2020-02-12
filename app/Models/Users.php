<?php

namespace user;

use db\Database;
use form\Form;
use table\Table;

include_once '../../frame/Database.php';
include_once 'form.php';
include_once 'table.php';

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
        if (isset($_POST['sent'])) {
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $sql = "INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$this->username', '$this->email', '$this->password')";
            var_dump($this->deleteInsert($sql));
        }

        /*if (isset($_POST['edit'])){
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $sql = "SELECT `username`, `email`, `password` FROM `users` WHERE `email` = '$this->email'";
            var_dump($this->deleteInsert($sql));
        }*/
    }

}

$user = new Users();
$user->GetUsers();
$form->RegForm();
$user->SetNewUser();
$table->GetAllUsersAllDate($user->GetUsers());
var_dump($user->GetUsers());
?>