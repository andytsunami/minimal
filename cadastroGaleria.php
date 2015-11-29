<?php 
	ob_start();
	include("cabecalho.php");

	if(empty($_SESSION)){
		header("Location: galeria.php");
	}

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
		$titulo = htmlentities($_POST['titulo'],ENT_QUOTES);
		$tags = htmlentities($_POST['tags'],ENT_QUOTES);

		$tamanho = filesize($imagem["tmp_name"]);
		$mysqlImg = addslashes(fread(fopen($imagem["tmp_name"], "r"), $tamanho));

		$sql = "INSERT INTO `galeria` (`id_Visitante`, `data`, `titulo`, `imagem`) VALUES ('{$idVisitante}', now(), '{$titulo}', '{$mysqlImg}');";

		mysql_query($sql,$conexao) or exit(mysql_error());

		$idGaleria = mysql_insert_id();

		$tags = explode(";", $tags);

		foreach ($tags as $tag) {
			$idTag = insereTag(trim($tag),$conexao);

			$relacionamento = "INSERT INTO `tag_galeria` (`id_tag`, `id_galeria`) VALUES ('{$idTag}', '{$idGaleria}');";

			mysql_query($relacionamento,$conexao);
		}


		header("Location: galeria.php");
	}
	
	

	function insereTag($tag,$conexao){

		$idTag = verificaTag($tag,$conexao);

		if($idTag > 0){
			return $idTag;
		} else {
			$insert = "INSERT INTO tags (`tag`) VALUES ('{$tag}');";
			mysql_query($insert,$conexao);
			$idTag = mysql_insert_id();
			return $idTag;
		}

	}

	function verificaTag($tag, $conexao){
		$result = mysql_query("select id from tags where tag = '{$tag}';",$conexao) or exit(mysql_error());
		$retorno = mysql_result($result, 0);

		//echo "<h1>{$retorno}</h1>";

		if($retorno > 0){
			return $retorno;
		} else {
			return 0;
		}
	}

	mysql_close($conexao);
	 	
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