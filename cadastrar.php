<?php
date_default_timezone_set('America/Recife');

/* Desabilita notificação de erros na página */
error_reporting( E_ALL ^ E_DEPRECATED ^ E_WARNING );
	
session_start();

include("db.php");

if ( isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha']) ) {

	// username and password sent from Form
	$nome = mysqli_real_escape_string($db,$_POST['nome']);
	$telefone = mysqli_real_escape_string($db,$_POST['telefone']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	
	//?nome=TIBERIUS&telefone=(81)9988990-009&email=tiberius.macedo@gmail.com&senha=123mudar
	//Here converting passsword into MD5 encryption. 
	$senha = md5(mysqli_real_escape_string($db, $_POST['senha']));	
	
	$result = mysqli_query($db, "SELECT CODIGO FROM usuario where UPPER(EMAIL) LIKE '" . strtoupper($email) . "'");
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	// If result matched $username and $password, table row  must be 1 row
	if ( $count >= 1 ) {
		echo 'E-mail já cadastrado.';
	} else {
		$dataAgora = date('Y-m-d H:i:s', time());
		
		$sql1 = "INSERT INTO usuario (EMAIL, NOME, TELEFONE, SENHA, CODIGO_TIPO_USUARIO, DATA_CADASTRO, CODIGO_STATUS)" .
					 " VALUES ('" . $email . "', '" . $nome . "', '" . $telefone . "', '" . $senha . "', 1, '" . $dataAgora . "', 1);";
		
		//echo $sql1;
		
		$incluir = mysqli_query($db, $sql1);
		
		//if (!$incluir) echo 'Erro: '. $mysqli_error();
		//echo 'inc= ' . $incluir;
		if ($incluir == '') {
				echo 'Erro durante o cadastramento.';
		} else {
				//deu tudo certo
				//enviar emai com boas vindas!
				
				//include_once "email-content/email_cadastro.php";
				//include_once "email-content/email/class.phpmailer.php";
				
				/*
				$mail = new PHPMailer();

				// Define os dados do servidor e tipo de conexão
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				$mail->SMTPSecure = "ssl";
				$mail->Port = 465;
				$mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP
				$mail->Debug  = 2;
				$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
				$mail->Username = 'tiberius.macedo@gmail.com'; // Usuário do servidor SMTP
				$mail->Password = '123mudar'; // Senha do servidor SMTP
				
				// Define o remetente
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->From = 'noreply@chegaja.com.br';
				$mail->FromName = 'ChegaJá';
				
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
				$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
				
				// Define a mensagem (Texto e Assunto)
				// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				$mail->Subject  = "Confirmação de Cadastro"; // Assunto da mensagem
				
				$mensagem = gerarEmail($nome);
				
				$mail->AddAddress($email , $nome);
				$mail->Body = $mensagem;
				
				if($mensagem) {
					$mail->Send();
				}
				*/
				/*
				$to  = $email . ' '; // note the comma
				//$to .= 'wez@example.com';

				// subject
				$subject = 'Confirmação de Cadastro';
				
				$message = gerarEmail($nome);
				
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				
				// Additional headers
				$headers .= 'To: ' . $nome .  '<' . $email.'>' . "\r\n";
				$headers .= 'From: ChegaJá <noreplay@chegaja.com.br>' . "\r\n";
				//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
				//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
				
				// Mail it
				mail($to, $subject, $message, $headers);
				*/
				
		}
	}
}
?>