<?php

namespace users;

class Users
{
    public $name = '';
    public $surname = '';
    public $age = '';

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function unsetProperty($object, $key)
    {
        unset($object->$key);
    }

    public function changeProperty($key, $value)
    {
        $this->$key = $value;
    }
}

$user = new Users('Mantas', 'Puodeliukas', 25);
var_dump($user);
$user->unsetProperty($user, 'age');
var_dump($user);
foreach ($user as $value){
    print $value . '<br>';
}

$user->changeProperty('name', 'Robertas');
var_dump($user);
