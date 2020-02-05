<?php

$a = array(10, 20, 30, 1, 1, 50, 0, 0, 'jonas', 'petras');

foreach ($a as $array) {
    if (is_int($array)) {
        $array *= 10;
        print $array . '<br>';
    } else {
        print $array . '<br>';
    }
}
