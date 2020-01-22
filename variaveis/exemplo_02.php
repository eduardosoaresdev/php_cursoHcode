<?php
	$anoNascimento = 1998;

	echo $anoNascimento."<br/><br/>";

	var_dump($anoNascimento);

	echo "<br/><br/>";
	//o comando UNSET apaga/reseta/elimina o valor da variável na memória
	unset($anoNascimento);

	//o comando ISSET verifica a existência de uma variável, se a mesma foi definida
	if(isset($anoNascimento)){
		echo $anoNascimento;
	} else {
		echo "A variável foi resetada e não pode mais ser exibida.";
	}
?>