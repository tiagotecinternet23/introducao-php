<?php // exercicio02.php
/* Protótipo de Chatbot */
echo "\n== Chatbot da empresa Biribinha == \n";
echo "Opções válidas:\n\n";
echo "1 - Informação\n";
echo "2 - Reclamação\n";
echo "3 - Elogios\n";
echo "4 - Status\n";

echo PHP_EOL;
$opcao = readline("Digite uma opção: ");

switch($opcao){
	case 1: $resultado = "Legal, o que deseja saber?"; break;
	case 2: $resultado = "Puxa, que pena... O que houve?"; break;
	case 3: $resultado = "Bacana! Pode falar :)"; break;
	case 4:
		$resultado = "Ok, um momento enquanto verifico...";
	break;
	default:
		$resultado = "Lascou, vou chamar a Valeska";
	break;
}

echo PHP_EOL;
echo $resultado;












