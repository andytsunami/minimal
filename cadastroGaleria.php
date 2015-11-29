<?php 
	//ini_set('display_errors', 'on');
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	$nome = "";
	$email = "";
	$senha = "";

	$sql = "";

	$erro = "";
	
	
	include("cabecalho.php");
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
						<button class="waves-effect waves-light btn blue" type="button" id="cadastro"><i class="material-icons left">cloud</i>Salvar</button>
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