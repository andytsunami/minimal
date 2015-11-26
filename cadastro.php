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
	
	//echo var_dump($preenchido);

	if($preenchido){

		$nome =  htmlentities($_POST['nome'],ENT_QUOTES);
		$email = htmlentities($_POST['email'],ENT_QUOTES);
		$senha = htmlentities($_POST['senha'],ENT_QUOTES);

		$senha = md5($senha);

		$sql = "INSERT INTO visitante (nome,email,senha) VALUES('{$nome}','{$email}','{$senha}');";

		mysql_query($sql,$conexao);

		//header("Location: index.php");



	}

	function emailUnico($email,$conexao){
		$result = mysql_query("select count(*) from visitante where email = {$email};",$conexao);
		$quantidade = mysql_num_rows($result);

		var_dump($quantidade);

		return $quantidade;

	}


	if(isset($_POST['senha'])){
		$res = emailUnico($_POST['senha'],$conexao);
		/*echo "Resultado " . " - " . $res . " ?";	
		var_dump($res);*/
	}


	
	include("cabecalho.php");
?>

	<div class="container">
		<h1 class="header">Cadastro</h1>
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