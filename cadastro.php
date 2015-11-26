<?php 
	require_once 'config.php';
	header('Content-Type: text/html; charset=utf-8');
	
	$conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
	mysql_set_charset("utf8", $conexao);
	
	mysql_select_db($banco);

	
include("cabecalho.php");
?>

	<div class="container">
		<h1 class="header">Cadastro</h1>
		<main>
		<div class="row">
			<form class="col s6" method="post">
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
					<div class="input-field col s12">
					      <input type="checkbox" id="news" name="news" />
					      <label for="news">Deseja se inscrever em nosso newsletter?</label>
    				</div>
					
					<div class="input-field col s12 sub">
						<button class="waves-effect waves-light btn blue" type="button"><i class="material-icons left">save</i>Salvar</button>
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