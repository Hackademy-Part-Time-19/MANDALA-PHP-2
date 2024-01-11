<?php

$array = [87, 42, 15, 69, 23, 56, 91, 34, 78, 10];

$array_pari = [];

foreach ($array as $numero) {
    if ($numero % 2 == 0) {
        $array_pari[] = $numero;
    }
}

$media_numeri_pari = array_sum($array_pari) / count($array_pari);

echo "la media dei numeri pari è: " . $media_numeri_pari;