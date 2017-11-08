<?php
include("cabecalho.php");
?>
<!-- conteudo principal -->
	<article class="coluna80">
	<section class="lista">
		<ul>
<?php
include("professores.php");

$lista = listaprofessores();

foreach ($lista as $professor) {
?>
		<li><a href="detalhaprofessor.php?cod=<?=$professor['siape']?>"><?=$professor['nome']?></a></li>		
	
	<?php
}
?>
</ul>
	</section>
	</article>
<?php
	include("rodape.php");

	?>
