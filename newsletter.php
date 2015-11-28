<?php 
	ini_set('display_errors', 'on');
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');

	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);

	mysql_select_db($banco);

	$email = "";

	
	if(!empty($_POST['emailNews'])){	
		$email = htmlentities($_POST['emailNews'],ENT_QUOTES);
	}

	
	if(emailUnico($email,$conexao)){
			$sql = "INSERT INTO newsletter VALUES ('{$email}');";
			mysql_query($sql,$conexao) or exit(mysql_error());
		}

		function emailUnico($email,$conexao){
		
			$result = mysql_query("select count(*) quant from visitante where email = '{$email}';",$conexao) or exit(mysql_error());
			
			$quant = mysql_result($result, 0);

			return $quant == 0;
		}	

	header("Location: index.php");

?>