<?php
	$a = 30;
	$b = 55;
	$c = 30.0;

	var_dump($a > $b);

	echo "<br/>";

	var_dump($a < $b);

	echo "<br/>";

	//1 igual é operador de atribuição
	//Assim estou atribuindo o valor de B para a variável A (incorreto, neste caso)
	//var_dump($a = $b);

	echo "<br/>";

	//2 iguais é o operador de comparação (apenas de valor)
	//Assim estou comparando A e B (correto, neste caso)
	var_dump($a == $b);

	echo "<br/>";

	//3 iguais é o operador de comparação de valor e tipo (se são idênticos)
	var_dump($a === $c);

	echo "<br/>";

	//Operador de diferente/ "!" indicador de negação/ "!=" não é igual, diferente
	var_dump($a != $b);

	//Verifica se não é idêntico
	var_dump($a !== $b);
?>