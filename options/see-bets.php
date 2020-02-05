<?php

print_r('|------------------------------------------------|'.PHP_EOL);
print_r('|               Jogos Registrados                |'.PHP_EOL);
print_r('|------------------------------------------------|'.PHP_EOL);
print_r(PHP_EOL);

// Buscando receitas e preenchendo o array de linhas.
$fileBets = __DIR__.'/../database/bets.csv';

$betsArray = file($fileBets);

foreach ($betsArray as $key => $row) {
    print_r(($key + 1).') '.$row);
}

print_r('Aperte uma tecla para continuar .. '.PHP_EOL);
stream_get_line(STDIN, 1024, PHP_EOL);
