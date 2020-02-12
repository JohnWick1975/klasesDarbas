<?php

namespace users;

class Users
{
    /* public $name = '';
     public $surname = '';
     public $age = '';

     public function __construct($name, $surname, $age)
     {
         $this->name = $name;
         $this->surname = $surname;
         $this->age = $age;
     }*/

    public function unsetProperty($object, $key)
    {
        unset($object->$key);
    }

    public function changeProperty($key, $value)
    {
        $this->$key = $value;
    }

    public function GetForm()
    {
        print "<form method='post'>
        <input type='text' name='name' placeholder='name'>
        <input type='text' name='surname' placeholder='surname'>
        <input type='text' name='age' placeholder='age'>
        <button type='submit' name='send'>Send</button>
        </form>";
    }

    public function setProperty()
    {
        if (isset($_POST['send'])) {
            $this->name = $_POST['name'];
            $this->surname = $_POST['surname'];
            $this->age = $_POST['age'];
        }
    }

}

$user = new Users();
$user->GetForm();
$user->setProperty();
var_dump($user);

