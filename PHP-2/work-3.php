<?php

for ($i=0; $i <= 100; $i++) { 
    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "PHP \n";
    }
    elseif ($i % 3 != 0 && $i % 5 == 0) {
        echo "JAVASCRIPT \n";
    }
    elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY \n";
    }
    else {
        echo $i . " \n";
    }
}