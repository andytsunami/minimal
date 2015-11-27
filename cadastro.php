<?php 
	ini_set('display_errors', 'on');
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	$nome = "";
	$email = "";
	$senha = "";

	$sql = "";
	$preenchido = (!empty($_POST["nome"]) AND !empty($_POST['email']) AND !empty($_POST['senha']));

	$erro = "";
	

	if($preenchido){


		$nome =  htmlentities($_POST['nome'],ENT_QUOTES);
		$email = htmlentities($_POST['email'],ENT_QUOTES);
		$senha = htmlentities($_POST['senha'],ENT_QUOTES);

		if(emailUnico($email,$conexao)){
			$senha = md5($senha);
			$sql = "INSERT INTO visitante (nome,email,senha) VALUES('{$nome}','{$email}','{$senha}');";
			mysql_query($sql,$conexao) or exit(mysql_error());
			
			if(!empty($_POST['news'])){
				mysql_query("INSERT INTO newsletter values ('{$email}');") or exit(mysql_error());
			}

			header("Location: index.php");

		} else {
			$erro = "Endereço de email já cadastrado.";
		}


	}

	function emailUnico($email,$conexao){
	
		$result = mysql_query("select count(*) quant from visitante where email = '{$email}';",$conexao) or exit(mysql_error());
		
		$quant = mysql_result($result, 0);

		return $quant == 0;
	}
	
	include("cabecalho.php");
	mysql_close();
?>

	<div class="container">
		<h1 class="header">Cadastro <?=$erro?></h1>
		<main>
		<div class="row">
			<form class="col s6" method="post" id="form">
				<div class="row">
		        	<div class="input-field col s12">
						<label>Nome completo</label>
						<input type="text" name="nome" />
					</div>
					<div class="input-field col s12">
						<label>E-mail</label>
						<input type="text" name="email" />
					</div>
					<div class="input-field col s12">
						<label>Senha</label>
						<input type="password" name="senha" />
					</div>
					<div class="inputf-ield col s12">
					      <input type="checkbox" id="news" name="news" />
					      <label for="news">Deseja se inscrever em nosso newsletter?</label>
    				</div>
					
					<div class="input-field col s12 sub">
						<button class="waves-effect waves-light btn blue" type="button" id="cadastro"><i class="material-icons left">save</i>Salvar</button>
					</div>
					
				</div>
			</form>
		</div>
		</main>
	</div>
	<div class="fixo">
		<?php 
			include("rodape.php");
		?>
	</div>