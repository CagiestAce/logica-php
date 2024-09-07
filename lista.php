<?php

$idades = [21, 20, 40, 15, 19, 30];

list($idadeVinicius, , $idadeMaria) = $idades;
unset($idades[0]);

$idades[] = 20;

foreach ($idades as $idade) {
    echo $idade . PHP_EOL;
}