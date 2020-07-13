<?php

//EXIBIR OS NÚMEROS ÍMPARES ATÉ 100

/* PRIMEIRO MODO

for ($contador = 1; $contador <= 100; $contador += 2) {
    echo "#$contador" . PHP_EOL;
} 

*/

// SEGUNDO MODO

for ($contador = 1; $contador <= 100; $contador++) {
    if ($contador % 2 != 0) {
        echo "#$contador" . PHP_EOL;
    }
    
} 