<?php 
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<h1>Cadastro</h1>
	<form>
		<label>Nome completo</label>
		<input type="text" name="nome" />
		<label>E-mail</label>
		<input type="text" name="email" />
		<label>Senha</label>
		<input type="password" name="senha" />

		<input type="button" value="Salvar" />
	</form>
</body>
</html>