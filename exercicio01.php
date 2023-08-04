<?php 
// exercicio01.php

$uc = readline("Qual UC/Curso? ");
$cargaHoraria = readline("E a carga horária? ");

$limiteDeFaltas = $cargaHoraria / 4;

// echo $uc, $cargaHoraria, $limiteDeFaltas;
echo "Para o curso/uc ".$uc.", com carga horária de ".$cargaHoraria." horas, o limite de faltas é de ".$limiteDeFaltas." horas."; 

echo PHP_EOL;

echo "\nCurso: ".$uc. PHP_EOL; // ou ."\n"
echo "Carga horária: ".$cargaHoraria." horas.". PHP_EOL;
echo "Limite de faltas: ".$limiteDeFaltas." horas.";
