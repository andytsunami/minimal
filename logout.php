<?php 
		session_start("visitante");

		unset($_SESSION["id"]);
		unset($_SESSION["nome"]);
		unset($_SESSION["email"]);
		unset($_SESSION["logado"]);

		session_destroy();

		header("Location: index.php");
?>