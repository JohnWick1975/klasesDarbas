<?php

var_dump($_GET);

$new_array = array_diff($_GET, array(''));

var_dump($new_array);

foreach ($new_array as $value) {
    print $value . ' ';
}