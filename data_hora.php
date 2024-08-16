<?php
// escrever uma frase que mostre a data atual
date_default_timezone_set('America/Sao_Paulo');
echo "Hoje é dia " . date('d/m/Y'), "\n";
echo "e agora são " .date('h:i:s A'),"\n";
echo "\n";
echo "\n";
/*
 DESAFIOS
		1. Na função date(), substituir Y por y e observe o resultado;
		Exibe a data com os 4 digitos do ano
		2. Pesquise como exibir a hora no formato 12 horas (A.M e P.M);
		3. Exiba o nome do mês atual;

		site oficial: php.net

		**************** VÁRIAVEIS EM PHP****************
		Sempre precedidas de $ e não podem conter caracteres especiais
		como: &, +, -, <, >, etc...

		$_variavel
		$variavel
		$_123
		$123

		para atribuir um valor  a $variavel, utilizamos =, ex:

		$carro = fusion;
		$cor = prata;

		onde lemos:  a variavel $carro recebe fusin como valor.

		************************ SUPERGLOBAIS (PALAVRAS RESERVADAS)  ***********

		%_GET, $_POST, $_FILES, $_SESSION, $_COOKIE, $_REQUEST, $_SERVER, ETC.


		****************** OPERADORES ******************

		Para realização de cálculos aritméticos utilizamos?

		(+)soma;
		(-)subtração;
		(*)multiplicação;
		(/)divisão;
		(%)resto;


		DESAFIO 2

		1. Utilizando variáveis e operadores aritméticos, execute os seguintes calculos e imprima os resultados:
		multiplique 10 x 20
		2. Calcule 18% de 1.900 
		3. Utiliazando a função de data, calcule a diferença de dias entre as datas: 28/02/2024 e hoje.
*/



		echo " O resultado da Multiplicação é: \n";
		echo $multiplicacao = 10 * 20;
		echo " O resultado da calculo é: \n";
		echo "\n";
		echo "\n";

		echo $porcentagem = 18 / 1900 * 100;
		echo "\n";
		echo "\n";
		echo "\n";

		echo " A soma difrença das datas é de : \n";
		$datas = date('Y-m-d') - date 24-05-24; 

		echo $datas;

		

?>