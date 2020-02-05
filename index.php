<?php

$a = '10 maisu';
$b = '1 maisu';
$a = explode(' ',$a);
$b = explode(' ',$b);
$c = $a[0] + $b[0]  . ' ' . $a[1];
print $c . '<br>';

$text = 'namas medis mama';
$text_array = explode(' ', $text);
print_r($text_array);