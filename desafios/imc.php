<?php

$altura = 1.68;
$peso = 90;
$imc = $peso / $altura**2;

if ($imc < 18.5) {
    echo "Você esta abaixo do peso";
}
if ($imc <= 24.9 && $imc >= 18.5) {
    echo "Você esta na média";
} 
if ($imc > 24.9) {
    echo "Você está acima do peso";
}

echo "Seu Imc é $imc";