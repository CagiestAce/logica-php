<?php

$contasCorrentes = [
    12345678910 => [
        'Titular' => 'Vinicius',
        'Saldo' => 1000
    ], 
    12345678909 => [
        'Titular' => 'Maria',
        'Saldo' => 10000
    ],
    12345678989 => [
        'Titular' => 'Alberto',
        'Saldo' => '300'
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['Titular'] . PHP_EOL;
}