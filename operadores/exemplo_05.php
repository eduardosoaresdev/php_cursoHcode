<?php
	$a = 50;
	$b = 35;

	echo "Para A = " . $a . " e B = " . $b . ", temos: <br/><br/>";

	//Operador SPACESHIP, compara se é menor, igual ou maior
		//Retorna 0 se os valores são iguais
		//Retorna 1 se o valor à esquerda é maior
		//Retorna -1 de o valor à direita é maior
	var_dump($a <=> $b);

	echo "<br/>";
?>