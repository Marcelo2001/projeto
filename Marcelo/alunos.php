<?php
	
//ARQUIVO COM FUNCOES PARA MANIPULAÇÃO DOS DADOS DE ALUNOS
	
/////////////// B U S C A S  A L U N O ///////////////
	function buscaAluno($codigo){
		$aluno = array();
		$dados = file("dados/alunos.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",",$linha);	
			if ($colunas[0] == $codigo) {
				$aluno['matricula'] = $colunas[0];
				$aluno['nome']  	= $colunas[1];
				$aluno['turma'] 	= $colunas[2];
				$aluno['email'] 	= $colunas[3];
				$aluno['foto']  	= $colunas[4];
			}
		}
		return $aluno;
	}
/////////////// L I S T A  A L U N O S ///////////////
	function listaAlunos(){
		$alunos = array();
		//abre o arquivo e retorna seu conteudo em um array
		$dados = file("dados/alunos.csv");
		foreach ($dados as $posicao=>$linha) {
			if($posicao != 0){
			$colunas = explode(",",$linha);
			$aluno = array();
			$aluno['matricula'] = $colunas[0];
			$aluno['nome']  = $colunas[1];
			$aluno['turma'] = $colunas[2];
			$aluno['email'] = $colunas[3];
			if($colunas[4]!=""){
				$aluno['foto']  = $colunas[4];
			}else{
				$aluno['foto']  = "imagens/semfoto.jpg";
			}
			$alunos[] = $aluno;
		}
	}
		return $alunos;
	}
	//testando a funcao

?>