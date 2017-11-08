<?php


   include("cabecalho.php");
   include("professores.php");

   $siape = $_GET['cod'];

   $professor=buscaProfessor($siape);
  ?>
  <!-- conteudo principal -->
  <article class="coluna80">
    <section class="foto">
      <img src="<?=$professor['foto']?>">
    </section>

    <section class="dados">
      <p>Nome: <?=$professor['nome']?></p>
      <p>Email: <?=$professor['email']?></p>
      <p>Disciplinas: Fundamento de Informática</p>
      <p>Sala: B7</p>

    </section>
  </article>


<?php

   include("rodape.php");


?>