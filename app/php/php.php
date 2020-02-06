<?php
var_dump($_POST);
//failo prijungimas
$file = "list.txt";

$fo = fopen($file, 'a') or die("can't open file");

$stringData = "Floppy Jalopy\n";

fwrite($fo, implode(", ", $_POST) . "\n");

fclose($fo);
?>