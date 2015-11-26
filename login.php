<?php 
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	$nome = "";
	$email = "";
	$senha = "";

	$sql = "";

	if(isset($_POST["email"]) && isset($_POST['senha'])){

		
		$email = htmlentities($_POST['email'],ENT_QUOTES);
		$senha = htmlentities($_POST['senha'],ENT_QUOTES);

		$senha = md5($senha);

		$sql = "select id, nome, email from visitante where nome = '{$nome}' and senha = '{$senha}';";

		$retorno = mysql_query($sql,$conexao);

		if(!empty($retorno)){
			$nome = 
		}

		header("Location: index.php");

	}

	
	include("cabecalho.php");
?>