<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	if((($usuario == "Admin") || ($usuario == "admin")) && ($senha=="123")){
    echo "Deu certo!";
	}else{
		echo "Deu errado!";
	}


	
	
?>
</body>
</html>