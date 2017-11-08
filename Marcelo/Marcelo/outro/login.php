<?php
    session_start();

	//capturando os valores que vieram pelo POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//se usuario informado for 'admin' e senha informada for 'admin'
	if($login == 'admin' && $senha == 'admin'){
	echo("Olá, Administrador!");

	//gravar as informações na session
	$_SESSION['nome'] = "Administrador";
	$_SESSION['login'] = "admin";
	echo('<meta http-equiv="refresh" content="3;url=restrito_adm.php">');
}elseif($login=='Marcelo' && $senha=='1234'){
	echo('Olá Marcelo');
	echo('<meta http-equiv="refresh" content="3;url=usuario.php">');
}else{
	echo("Dados Invalidos");
	echo('<meta http-equiv="refresh" content="3;url=publico.php">');
}
