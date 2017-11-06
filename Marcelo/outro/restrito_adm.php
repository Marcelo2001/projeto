<?php
session_start();
if($_SESSION['login'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
	<title>restrito - administrador</title>
</head>
<body>
	<h2>Página De Acesso Restrito - Administrador</h2>
	<p>Nesta Pagina Você Pode Alterar As Configurações De Sistema.</p>
</body>
</html>

<?php

}else{
	echo("acesso negado");
	echo('<meta http-equiv="refresh" content="3;url=publico.php">');
}
?>