<?php
	if(!isset($_POST['email']) && !isset($_POST['nome']) == "" && $_POST['nome'] == ""){
			header("Location: index.html");
		}
		else{
			$nome =  $_POST['nome'];
			$email = $_POST['email'];
			require("php/phpmailer/class.phpmailer.php");
			$email_destinatario = "contato@veggaconsultoria.com.br";
			if (preg_match ("/^[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*@[A-Za-z0-9]+([_.-][A-Za-z0-9]+)*\\.[A-Za-z0-9]{2,4}$/", $email)) {
				$mail = new PHPMailer();
				$mail->From = $email;
				$mail->FromName = $nome;
				$mail->AddAddress($email_destinatario);
				$mail->Subject  = "Contato: Engenharia Legal";
				$mail->CharSet  = "UTF-8";
				$mail->Body = $mensagem;
				$enviado = $mail->Send();
				$mail->ClearAllRecipients();
				$mail->ClearAttachments();
				if ($enviado) {
					echo "<script type='text/javascript'> 
							location.href='pdf/ebook_eng_legal.pdf';
						  </script>";
				} 
				else {
					echo "<script type='text/javascript'> 
							location.href='pdf/ebook_eng_legal.pdf';
						  </script>";
				}
			} 
			else {
					echo "<script type='text/javascript'> 
							alert('O e-mail digitado � inv�lido, por favor tente novamente'); 
							location.href='engenharia-legal.html';
						  </script>";
			}
	 }
?>