<?php

$dezesDydis = 24;
$savaite = 0;
$menuo = 0;
$kiekIsgeriau = 0;


for ($s = 1; $s <= 4; $s++) {
    $penktadienis = rand(4, 6);
    $sestadienis = rand(1, 2);
    for ($x = 1; $x <= 4; $x++) {
        $pirdienisKetvirtadienis = rand(1, 3);
        $kiekIsgeriau += $pirdienisKetvirtadienis;
    }
    $savaite = $kiekIsgeriau + $penktadienis + $sestadienis;
    print $savaite . ' isgerta ' . $s . 'savaite' . '<br>';
    $kiekIsgeriau = 0;
    $menuo += $savaite;
}
print $menuo . ' per menesi';



