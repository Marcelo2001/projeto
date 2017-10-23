<?php
	include("cabecalho.php");
	include("alunos.php");
	$matricula = $_GET['cod'];
	$alunos = buscaAluno($matricula);
?>

<div class="detalhes-alunos">
	<img src="<?=$alunos['foto']?>" >
	<p><?=$alunos['nome']?></p>
	<p><?=$alunos['email']?></p>
</div>
<?php
	include("rodape.php");
?>