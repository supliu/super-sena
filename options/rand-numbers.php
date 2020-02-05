<?php

print_r('|------------------------------------------------|'.PHP_EOL);
print_r('|               Sorteando numeros ..             |'.PHP_EOL);
print_r('|------------------------------------------------|'.PHP_EOL);

$randNumbers = [];

while (6 != count($randNumbers)) {
    $number = random_int(1, 60);

    if (!in_array($number, $randNumbers)) {
        $randNumbers[] = $number;
    }
}

print_r('*****  NUMEROS SORTEADOS ['.implode(',', $randNumbers).']  *****'.PHP_EOL);

print_r(PHP_EOL);
print_r('Verificando apostas: '.PHP_EOL);
print_r(PHP_EOL);

foreach (file(__DIR__.'/../database/bets.csv') as $bet) {
    $betNumbers = explode(',', $bet);

    $count = 0;

    foreach ($betNumbers as $number) {
        if (in_array($number, $randNumbers)) {
            $count = $count + 1;
        }
    }

    print_r($bet);

    if (6 == $count) {
        print_r('Ganhou :-)');
    } else {
        print_r('Não ganhou :-(');
    }

    print_r(PHP_EOL);
    print_r(PHP_EOL);
}

print_r('Aperte uma tecla para continuar .. '.PHP_EOL);
stream_get_line(STDIN, 1024, PHP_EOL);
