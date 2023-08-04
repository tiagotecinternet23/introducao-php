<?php
/* -Para valores entre 1000 E 1500, deve aparecer a mensagem:
O preço PREÇO está no intervalo indicado, e terá um desconto 10%.

-Para outros valores, deve aparecer a mensagem:
O preço PREÇO está fora do intervalo indicado, portanto terá um desconto 5% */

// Entrada de dados
$preco = readline("Informe o preço: ");

// Condicional com operador lógico &&
if($preco >= 1000 && $preco <= 1500){
	echo "O preço ".$preco." está no intervalo indicado, e terá um desconto 10%.";
} else {
	echo "O preço ".$preco." está fora do intervalo indicado, portanto terá um desconto 5%.";
}