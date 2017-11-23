<!DOCTYPE html>
<html>
<head>
	<title>Enviando email...</title>
</head>
<body>
	<?php 
	$campus = $_POST['campus'];
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];

	$periodo = $_POST['periodo'];
	$curso = $_POST['curso'];
	$turno = $_POST['turno'];
	$fone = $_POST['fone'];

	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$email = $_POST['email'];

	$item = $_POST['itens'];
	$obs = $_POST['obs'];
	$file = $file

	 
		$to = ""; #neste campo será inserido o email de destino do formulario.
		$subject = "";
	 	$header = "MIME-version: 1.0\n"; 
	 	$header = "content-type: text/html; charset=iso-8859-1\n";
	 	$header = "From: $email\n";
	 	mail($to,$subject,$message,$header);
	 	echo "Requerimento enviado com sucesso!!";

	 ?>



</body>
</html>