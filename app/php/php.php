<?php

$new_array = array_diff($_GET, array(''));

$name = ['jonas' => 0, 'petras' => 20, 'simas' => 10];
var_dump($name);

$array = ['siandiena', 'rasiu', 'tave', 'batai', 'mano', 'busi'];

$siandiena = array_search('siandien', $array);
$batai = array_search('batai', $array);

print '<br>' . $array[$siandiena] . ' ' . $array[$batai] . '<br>';
print $array[0] . ' ' . $array[3] . '<br>';

$array1 = ['Man atrodo tu esi geras zmogus.', 'Ir mielas'];
$array2 = ['Tomai', 'Giedriau'];
 print $array2[0] . ' ' . $array1[0];
