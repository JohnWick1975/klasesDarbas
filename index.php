<?php

$a = array(10, 20, 30, 50, 60, 70, 80, 90);
$count = count($a);
$b = [];

for ($x = 0; $x < $count; $x += 2) {
    $b[] = $a[$x];
}
foreach ($b as $array) {
    print $array . '<br>';
}

$c = 10;
$d = $c++;

print "c = $c <br> d = $d";
