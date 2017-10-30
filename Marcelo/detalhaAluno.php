<?php


   include("cabecalho.php");
   include("alunos.php");

   $matricula = $_GET['cod'];

if($matricula!=''){ // se nao tiver valor no siape
   $aluno = buscaAluno($matricula);
  ?>
  
  <article class="coluna80">
    <section class="foto">
      <img src="<?=$aluno['foto']?>">
    </section>

    <section class="dados">
      <p>Nome: <?=$aluno['nome']?></p>
      <p>Email: <?=$aluno['email']?></p>
      <p>Turma: <?=$aluno['turma']?></p>
    </section>
  </article>


<?php
}else{

	echo('<meta http-equiv="refresh" content="0;url=listaAlunos.php">');
}
   include("rodape.php");


?>