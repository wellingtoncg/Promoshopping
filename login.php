<?php
session_start();

/* Desabilita notificação de erros na página */
//error_reporting( E_ALL ^ E_DEPRECATED ^ E_WARNING );

include("db.php");

if ( isset($_POST['email']) && isset($_POST['password']) ) {

	// username and password sent from Form
	$username = mysqli_real_escape_string($db,$_POST['email']);
	
	//Here converting passsword into MD5 encryption. 
	$password = md5(mysqli_real_escape_string($db, $_POST['password']));
	
	$result = mysqli_query($db, "SELECT CODIGO, NOME, EMAIL, TELEFONE FROM usuario WHERE EMAIL = '". $username . "' and SENHA = '" . $password . "' AND CODIGO_STATUS = 1");
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	// If result matched $username and $password, table row  must be 1 row
	if ( $count == 1 ) {
			$_SESSION['@@2016_%_SSSN_EPSILON_%_2016@@'] = $row['NOME']; //Storing user session value.
			$_SESSION['id_cod'] = $row['CODIGO']; //Storing user session value.
			$_SESSION['id_phone'] = $row['TELEFONE']; //Storing user session value.
			
			//gravar no banco o id gcm
			//$sqlUpdate = "UPDATE clientes_app SET COD_GCM = '" . $_SESSION['idGCM'] . "' WHERE CODIGO = " . $_SESSION['id_cod'];
			//$result = mysqli_query($db, $sqlUpdate);
			
			echo $row['NOME'];
	} else {
		 echo trim('ERRO');
	}
}
?>