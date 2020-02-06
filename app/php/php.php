<?php

$numbers = [0.5, 3, 7.3, 2, 7, 7.1, 9, 5.4, 4.0, 0.0001];
$new_number = [];
 foreach ($numbers as $value){
     if (is_float($value) && $value != round($value)){
        array_push($new_number, $value);
     }
 }
 var_dump($new_number);

var_dump($_POST);