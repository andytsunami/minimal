<?php 
	ob_start();
	include("cabecalho.php");

	if(empty($_SESSION)){
		header("Location: galeria.php");
	}

	print_r($_SESSION);

	ini_set('display_errors', 'on');

	require_once 'config.php';
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	$imagem = "";
	$titulo = "";
	$tags = "";
	$idVisitante = $_SESSION["id"];

	$preenchido = (!empty($_FILES["imagem"]) AND !empty($_POST["titulo"]) AND !empty($_POST["tags"]));

	if($preenchido){
		$imagem = $_FILES["imagem"];
		$titulo = $_POST["titulo"];
		$tags = $_POST["tags"];

		$tamanho = filesize($imagem["tmp_name"]);
		$mysqlImg = addslashes(fread(fopen($imagem["tmp_name"], "r"), $tamanho));

		print_r($idVisitante);

		$sql = "INSERT INTO `galeria` (`id_Visitante`, `data`, `titulo`, `imagem`) VALUES ('{$idVisitante}', now(), '{$titulo}', '{$mysqlImg}');";

		mysql_query($sql) or exit(mysql_error());

		header("Location: galeria.php");
	}
	
	mysql_close();
	 	
?>

	<div class="container">
		<h1 class="header">Publicar na galeria</h1>
		<main>
		<div class="row">
			<form class="col s6" method="post" id="formGaleria" enctype="multipart/form-data">
			<input type="hidden" name="visitante">
				<div class="row">
		        	
		        	<div class="file-field input-field">
				      <div class="btn blue">
				        <span><i class="material-icons left">image</i>Imagem</span>
				        <input type="file" name="imagem">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text" placeholder="Clique no botão ao lado para escolher uma imagem.">
				      </div>
				    </div>

		        	<div class="input-field col s12">
						<label>Titulo</label>
						<input type="text" name="titulo" />
					</div>
					<div class="input-field col s12">
						<label>Tags</label>
						<input type="text" name="tags" />
					</div>
				    <div class="input-field col s12 sub">
						<button class="waves-effect waves-light btn blue" type="button" id="publicar"><i class="material-icons left">cloud</i>Salvar</button>
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