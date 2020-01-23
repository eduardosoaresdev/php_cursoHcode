<?php
	$empresa = "Hcode Treinamentos";

	//STR_REPLACE Substitui todas as ocorrências da string de procura com a string de substituição
	//str_replace ("carácter procurado", "carácter novo, substituto", "objeto que será usado na função")
	$empresa = str_replace("o", "0", $empresa);
	echo $empresa;
	echo "<br/>";

	$empresa = str_replace("e", "3", $empresa);
	echo $empresa;
	echo "<br/>";

	$empresa = str_replace("i", "1", $empresa);
	echo $empresa;
	echo "<br/>";

?>