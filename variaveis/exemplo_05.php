<?php
	$nome = "Eduardo Smith Parker";

	function teste(){
		//com o comando GLOBAL podemos usar uma variável que foi declarada fora do escopo da função
		global $nome;
		echo $nome;
	}

	teste();
?>