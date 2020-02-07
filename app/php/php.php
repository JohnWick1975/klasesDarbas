<?php

$dezesDydis = 20;
$savaite = 0;
$menuo = 0;
$kiekIsgeriau = 0;


for ($s = 1; $s <= 4; $s++) {
    $penktadienis = rand(4, 6);
    $sestadienis = rand(1, 2);
    $kiekIsgeriau = 0;
    for ($x = 1; $x <= 4; $x++) {
        $pirdienisKetvirtadienis = rand(1, 3);
        $kiekIsgeriau += $pirdienisKetvirtadienis;
    }
    $savaite = $kiekIsgeriau + $penktadienis + $sestadienis;
    print $savaite . ' isgerta ' . $s . 'savaite' . '<br>';
    $menuo += $savaite;
}
print $menuo . ' per menesi <br>';

$deziuKiekis = floor($menuo / $dezesDydis);
$buteliuLikutis = $menuo % $dezesDydis;

print 'deziu kiekis ' . $deziuKiekis;
print '<br>buteliu likutis ' . $buteliuLikutis;