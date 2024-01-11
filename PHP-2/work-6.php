<?php

$tombola = [];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $tombola[$i][$j] = rand(1, 100);
    }
}

var_dump($tombola);