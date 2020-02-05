<?php

print_r(PHP_EOL);

print_r('                              ...                 '.PHP_EOL);
print_r('              `+hmmdy/     :yNMMMNs`              '.PHP_EOL);
print_r('             +NMMMMMMMd` `dMMMMMMMMN/             '.PHP_EOL);
print_r('           .hMMMMMMMMMMs hMMMMMMMMMMMd+.          '.PHP_EOL);
print_r('         /hMMMMMMMMMMMMd`MMMMMMMMMMMMMMMd.        '.PHP_EOL);
print_r('       .mMMMMMMMMMMMMMMN`MMMMMMMMMMMMMMMMy        '.PHP_EOL);
print_r('       yMMMMMMMMMMMMMMMM-MMMMMMMMMMMMMMMMs        '.PHP_EOL);
print_r('       /MMMMMMMMMMMMMMMM/MMMMMMMMMMMMMMMh`        '.PHP_EOL);
print_r('        .odMMMMMMMMMMMMMhMMMMMMMMMMMMms-          '.PHP_EOL);
print_r('           `-:+++/++syNMMMNddhysooso:.`           '.PHP_EOL);
print_r('         :ymMMMMMMMMMMMMMMMMMMMMMMMMMMMmo`        '.PHP_EOL);
print_r('       `dMMMMMMMMMMMMMMMdmMMMMMMMMMMMMMMMN.       '.PHP_EOL);
print_r('       oMMMMMMMMMMMMMMM+oyyMMMMMMMMMMMMMMMy       '.PHP_EOL);
print_r('       oMMMMMMMMMMMMMMm sy:MMMMMMMMMMMMMMM:       '.PHP_EOL);
print_r('        oNMMMMMMMMMMMMy yy mMMMMMMMMMMMMy-        '.PHP_EOL);
print_r('         `sMMMMMMMMMMM/ yd -NMMMMMMMMMm-          '.PHP_EOL);
print_r('           +MMMMMMMMMh  ym  -mMMMMMMMm.           '.PHP_EOL);
print_r('            .yNMMMMh/   oM`   /dNMMmo             '.PHP_EOL);
print_r('               `-.      -Mo      `                '.PHP_EOL);
print_r('                         dM:                      '.PHP_EOL);
print_r('                         -NN+                     '.PHP_EOL);
print_r('                          .sNm.                   '.PHP_EOL);
print_r(PHP_EOL);
print_r('          **    BEM VINDO AO SUPER SENA    **     '.PHP_EOL);

$loop = true;

while ($loop) {
    print_r(PHP_EOL);

    print_r('|------------------------------------------------|'.PHP_EOL);
    print_r('| Selecione uma opção abaixo:                    |'.PHP_EOL);
    print_r('|------------------------------------------------|'.PHP_EOL);

    print_r(PHP_EOL);

    print_r('1) Registrar um jogo '.PHP_EOL);
    print_r('2) Sortear numeros '.PHP_EOL);
    print_r('3) Ver jogos registrados '.PHP_EOL);
    print_r('4) Limpar jogos '.PHP_EOL);
    print_r('5) Sair '.PHP_EOL);

    print_r(PHP_EOL);

    $option = null;

    while (null == $option) {
        print_r('Digite a opcao escolhida: ');
        $option = stream_get_line(STDIN, 1024, PHP_EOL);

        $checkOptionIsInt = filter_var($option, FILTER_VALIDATE_INT);

        if (false == $checkOptionIsInt || $option < 0 || $option > 5) {
            print_r('Opção invalida!'.PHP_EOL);
            $option = null;
        }
    }

    switch ($option) {
        case 1:
            include 'options/register-bet.php';

        break;
        case 2:
            include 'options/rand-numbers.php';

        break;
        case 3:
            include 'options/see-bets.php';

        break;
        case 4:
            file_put_contents(__DIR__.'/database/bets.csv', '');
            print_r('Jogos limpados com sucesso!'.PHP_EOL);

        break;
        default:
            $loop = false;

        break;
    }
}

print_r(PHP_EOL);

print_r('|---------------------------------------------------|'.PHP_EOL);
print_r('|  Ate logo! :-) Obrigado por usar o Super Sena!    |'.PHP_EOL);
print_r('|---------------------------------------------------|'.PHP_EOL);
