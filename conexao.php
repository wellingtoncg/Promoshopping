<?php
$db_banco ="db_promo_shopping";

$db_user = "root";
$db_pass = "";
$host = 'localhost';

$conexao = @mysql_connect($host,$db_user,$db_pass);
if (!($conexao)){
    print("<script language=JavaScript>
          alert(\"Não foi possível conectar ao Banco de Dados.\");
          </script>");
	echo $conexao;
  exit;
}

mysql_query("SET NAMES 'utf8'");//indica o conjunto de caracteres que o cliente usará para enviar instruções SQL para o servidor.
mysql_query('SET character_set_connection=utf8');//Converte as declarações enviadas pelo cliente de character_set_client
mysql_query('SET character_set_client=utf8');//Variável do sistema a ser o conjunto de caracteres no qual os comandos sÃ£o enviados pelo cliente.
mysql_query('SET character_set_results=utf8');//Indica o conjunto de caracteres em que o servidor retorna os resultados da consulta para o cliente

$db = mysql_select_db($db_banco,$conexao) or
    die("<script language=JavaScript>alert(\"Tabela inexistente!\");</script>");    
?>