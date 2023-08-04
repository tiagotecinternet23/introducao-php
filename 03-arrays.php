<?php
// 03-arrays

/* Objetivos: como declarar, atribuir e acessar dados de vetores */

// Declaração do array (OPCIONAL)
// inicialmente vazio
$pessoas = []; // ou $pessoas = array()

// Processo de atribuição de dados
// $pessoas[0] = "Jon Oliva";
// $pessoas[1] = "David Gilmour";
// $pessoas[2] = "Ozzy Osbourne";

// Versão com entrada interativa
$pessoas[0] = readline("Informe a primeira pessoa: ");
$pessoas[1] = readline("Informe a segunda pessoa: ");
$pessoas[2] = readline("Informe a terceira pessoa: ");


// Saída dos dados
echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nTerceira pessoa: ".$pessoas[2];

echo PHP_EOL;

echo "Primeira pessoa: ".$pessoas[0].PHP_EOL;
echo "Segunda pessoa: ".$pessoas[1].PHP_EOL;
echo "Terceira pessoa: ".$pessoas[2].PHP_EOL;

/* Lembrete: use \n (dentro da string) para criar
"quebras de linha" ou a constante PHP_EOL */



