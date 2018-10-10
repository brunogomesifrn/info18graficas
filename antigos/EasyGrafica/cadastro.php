<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<?php
	$email_cad = $_POST['email'];
	$senha_cad = $_POST['senha_cad'];
	$confsenha_cad = $_POST['confsenha'];
	if($senha_cad!=$confsenha_cad){
    echo "Senhas não coincidem!";
	}else{
	echo ("E-mail: ".$email_cad);
	echo ("Senha: ".$senha_cad);		
	}
	?>

</body>
</html>