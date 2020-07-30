<?php
	//Variáveis pré-definidas são arrays super globais

	$nome = (int)$_GET["a"];

	//var_dump($nome);

	//$_SERVER["REMOTE_ADDR"] identifica o IP do ambiente
	$ip = $_SERVER["REMOTE_ADDR"];

	//echo $ip;

	$nomeArquivo = $_SERVER["SCRIPT_NAME"];

	echo $nomeArquivo;
?>