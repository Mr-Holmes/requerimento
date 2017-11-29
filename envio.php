<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enviando email...</title>
</head>
	<body>
		<?php 
		// $coord = '';

			$campus = $_POST['campus'];
			$nome = $_POST['nome'];
			$matricula = $_POST['matricula'];

			$periodo = $_POST['periodo'];
			$curso = $_POST['curso'];
			// if ($curso == 'ipi') {
			// 	// email de alexandre
			// } else if ($curso == 'log') {
			// 	// email de renata
			// }
			$turno = $_POST['turno'];
			$fone = $_POST['fone'];

			$cpf = $_POST['cpf'];
			$rg = $_POST['rg'];
			$email = $_POST['email'];

			$item = $_POST['itens'];
			$outros = $_POST['outros'];
			$obs = $_POST['obs'];
			$file = $_FILES['file'];

		 
			// $to = "mugiwara.gl@gmail.com"; #neste campo será inserido o email de destino do formulario.
			$subject = "$item";
			$message = " - Requerimento do Aluno -
				Campus : $campus        Nome do Aluno(a): $nome      matricula : $matricula
					periodo : $periodo   Curso : $curso    Turno : $turno   Telefone : $fone
				CPF : $cpf    Identidade : $rg   E-mail : $email    
						Item : $item   Outros : $outros    
					Observação : $obs  Anexos : $file
						";
		 	$header = "MIME-version: 1.0\n"; 
		 	$header = "content-type: text/html; charset=iso-8859-1\n";
		 	$header = "From: $email\n";
		 	mail($to,$subject,$message,$header);
		 // 	echo "Requerimento enviado com sucesso!!";


		 	
			$to = "mugiwara.gl@gmail.com"; #neste campo será inserido o email de destino do formulario.

			$file = isset($_FILES["file"]) ? $_FILES["file"] : FALSE;
			if(file_exists($file["tmp_name"]) and !empty($file)){
			$fp = fopen($_FILES["file"]["tmp_name"],"rb");
			$anexo = fread($fp,filesize($_FILES["file"]["tmp_name"]));
			$anexo = base64_encode($anexo);
			fclose($fp);
			$anexo = chunk_split($anexo);
			$boundary = "XYZ-" . date("dmYis") . "-ZYX";
			$mens = "--$boundary\n";
			$mens .= "Content-Transfer-Encoding: 8bits\n";
			$mens .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
			$mens .= "$message\n";
			$mens .= "--$boundary\n";
			$mens .= "Content-Type: ".$file["type"]."\n";
			$mens .= "Content-Disposition: attachment; filename=\"".$file["name"]."\"\n";
			$mens .= "Content-Transfer-Encoding: base64\n\n";
			$mens .= "$anexo\n";
			$mens .= "--$boundary--\r\n";
			$headers = "MIME-Version: 1.0\n";
			$headers .= "From: \"$email\"\n";
			$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
			$headers .= "$boundary\n";
			//envio o email com o anexo
			mail($email,$subject,$mens,$headers);
			echo"Email enviado com Sucesso!";
			}
			//se não tiver anexo
			else{
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: \"$nome\" <$email_from>\r\n";
			//envia o email sem anexo
			mail($to,$subject,$message, $header);
			echo"Email enviado com Sucesso!";
	}
	?>

	</body>
</html>