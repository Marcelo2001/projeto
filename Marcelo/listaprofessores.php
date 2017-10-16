<?php
include("cabecalho.php");
include("professores.php");

$lista = listaprofessores();

foreach ($lista as $professor) {
?>

	<div class="lista-professor">
		<img src="<?=$professor['foto']?>">
		<h2><a href="detalhaprofessor.php?cod=<?=$professor['siape']?>"></a></h2>		
	</div>
<?php
}

	include("rodape.php");

	?>
