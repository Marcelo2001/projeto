<?php
include("cabecalho.php");
include("alunos.php");

$lista = listaAlunos();

foreach ($lista as $aluno) {
?>

	<div class="lista-aluno">
		<img src="<?=$aluno['foto']?>">
		<h2><a href="detalhaalunos.php?cod=<?=$aluno['matricula']?>"><?=$aluno['nome'] ?></a></h2>		
	</div>
<?php
}

	include("rodape.php");

	?>
