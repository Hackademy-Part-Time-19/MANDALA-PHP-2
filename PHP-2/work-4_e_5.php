<?php

/*$temperatura = 5;

if ($temperatura < 15) {
    echo "Fa freddo, ci sono ". $temperatura . " gradi.";
}
elseif($temperatura >= 15 && $temperatura <= 25){
    echo "Fa caldo, ci sono ". $temperatura . " gradi.";
}
else {
    echo "Fa molto caldo, ci sono ". $temperatura . " gradi.";
}*/

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $Città => $temperatura) {
    if ($temperatura < 15) {
        echo "A " . $Città . " fa freddo, ci sono ". $temperatura . " gradi. \n";
    }
    elseif($temperatura >= 15 && $temperatura <= 25){
        echo "A " . $Città . " fa caldo, ci sono ". $temperatura . " gradi. \n";
    }
    else {
        echo "A " . $Città . " fa molto caldo, ci sono ". $temperatura . " gradi. \n";
    }
}

