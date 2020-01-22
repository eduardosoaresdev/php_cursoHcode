<?php
	//TIPOS DE DADOS
	//Comando VAR_DUMP identifica o tipo de váriavel
		//BÁSICOS
			//String
				//Aspas dupla ou simples é indiferente
			$nome = "Hcode";
			$site = 'www.hcode.com.br';

			//Inteiro
			$ano = 2020;

			//Ponto Flutuante ou float - Números com casas decimais
			$salario = 3000.00;

			//Booleano
			$bloqueado = false;
		///////////////////////////////////////////////////////////////////
		// COMPOSTOS
			//Array
				$frutas = array("abacaxi", "laranja", "manga");
				//Posição      (    0    ,     1    ,    2   )
				echo $frutas [2];

				echo "<br/>";
				echo "<br/>";
			//Objeto
			$nascimento = new DateTime();
			var_dump($nascimento);

			echo "<br/>";
			echo "<br/>";
		///////////////////////////////////////////////////////////////////
		//ESPECIAIS
			//Resource
				$arquivo = fopen("exemplo_03.php", "r");
				var_dump($arquivo);

				echo "<br/>";
				echo "<br/>";
			//Null
				//Diferença entre Null e Vazio - O Null é ausência de valor e uma varíavel vazia foi iniciada,
				  //ou seja, foi reservado um espaço na memória.
				$nulo = Null;
				$vazio = "";
?>