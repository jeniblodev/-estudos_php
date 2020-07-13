<?php

$peso = 90;
$altura = 1.58;

$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Você está abaixo do peso.";
} else if ($imc < 25) {
    echo "Você está com peso normal.";
} else {
    echo "Você está acima do peso.";
}