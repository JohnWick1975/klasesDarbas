<?php
var_dump($_POST);
//failo prijungimas
$file = "list.txt";

$fo = fopen($file, 'a') or die("can't open file");

$stringData = "Floppy Jalopy\n";

fwrite($fo, implode(", ", $_POST) . ", " . "\n");

fclose($fo);

$content = file($file);
$new_array = [];
foreach ($content as $value) {
    $array = explode(", ", $value);
    array_pop($array);
    array_push($new_array, $array);
}
var_dump($new_array);
?>