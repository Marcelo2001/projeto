<?php
	
//ARQUIVO COM FUNCOES PARA MANIPULAÇÃO DOS DADOS DE PROFESSORES

	
/////////////// B U S C A S  P R O F E S S O R ///////////////

	function buscaProfessor($codigo){
		$professor = array();

		$dados = file("dados/professores.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",",$linha);	
			if ($colunas[0] == $codigo) {
				$professor['siape'] = $colunas[0];
				$professor['nome']  = $colunas[1];
				$professor['email'] = $colunas[2];
				$professor['foto']  = $colunas[3];
			}
		}




		return $professor;
	}


/////////////// L I S T A  P R O F E S S O R E S ///////////////

	function listaProfessores(){
		$professores = array();

		$dados = file("dados/professores.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",",$linha);

			$professor = array();
			$professor['siape'] = $colunas[0];
			$professor['nome']  = $colunas[1];
			$professor['email'] = $colunas[2];
			$professor['foto']  = $colunas[3];

			$professores[] = $professor;
		}


		return $professores;
	}

	//testando a funcao
	$lista = listaProfessores();
	print_r($lista);




























