<?php

print_r('|------------------------------------------------|'.PHP_EOL);
print_r('|               Registrar um jogo                |'.PHP_EOL);
print_r('|------------------------------------------------|'.PHP_EOL);

$bet = [];

$positionNames = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto', 'sexto'];

while (6 != count($bet)) {
    $positionNumber = count($bet);

    $position = $positionNames[$positionNumber];

    print_r('Informe o '.$position.' numero: ');

    $number = stream_get_line(STDIN, 1024, PHP_EOL);

    if ($number >= 0 && $number <= 60 && !in_array($number, $bet)) {
        $bet[] = $number;
    } else {
        print_r('Numero invalido!'.PHP_EOL);
    }
}

$line = implode(',', $bet);

$fileBets = __DIR__.'/../database/bets.csv';

file_put_contents($fileBets, $line.PHP_EOL, FILE_APPEND);

print_r(PHP_EOL);

print_r('O Jogo ['.$line.'] foi cadastrado com sucesso!'.PHP_EOL);

print_r('Aperte uma tecla para continuar .. '.PHP_EOL);
stream_get_line(STDIN, 1024, PHP_EOL);
