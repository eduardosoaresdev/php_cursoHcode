<?php
	$a = NULL;
	$b = NULL;
	$c = 10;

	echo "Para A = " . $a . " e B = " . $b . " e C = " . $c . ", temos: <br/><br/>";

	//Operador NULL COALESCE, verifica se um valor é NULO
	echo $a ?? $b ?? $c;
?>