<?php
	$a = NULL;
	$b = NULL;
	$c = 10;

	echo "Para A = " . $a . " e B = " . $b . " e C = " . $c . ", temos: <br/><br/>";

	//Operador NULL COALESCE, verifica se um valor é NULO e para no próximo não nulo
	echo $a ?? $b ?? $c;
?>