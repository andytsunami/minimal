<?php 
  include("cabecalho.php");

  ini_set('display_errors', 'on');

  require_once 'config.php';
  
  $conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
  mysql_set_charset("utf8", $conexao);
  
  mysql_select_db($banco);

  $listaGaleria = "select g.titulo as titulo,v.nome as nomeVisitante, g.data as dtEnvio, g.imagem imagem, v.id as idVisitante, g.id as idGaleria from galeria g 
                    left join visitante v on v.id = g.id_visitante order by g.data desc;";

  $sqlTag = "select t.tag as tag from tag_galeria tg
            left join tags t on t.id = tg.id_tag
            where tg.id_galeria = ";

  $query = mysql_query($listaGaleria, $conexao);

?>
  <div class="navbar-fixed" id="sub-nav">
  <nav class="no-shadow sub-nav" id="sub-nav">
    <div class="nav-wrapper grey darken-2" id="sub-nav">
    <div class="container">

      <!-- Mobile Hamburguer Icon -->
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- Menu Links -->
      <ul class="left hide-on-med-and-down sub-nav" id="sub-nav">
        <li><a href="#" class="sub-nav-line">Novidades</a></li>
        <li><a href="#" class="sub-nav-line">Flat Design</a></li>
        <li><a href="#" class="sub-nav-line">Metro Design</a></li>
        <li><a href="#" class="sub-nav-line">Apple Design</a></li>
        <li><a href="#" class="sub-nav-line">Material Design</a></li>        
      </ul>
      <?php if (isset($_SESSION["logado"]) && $_SESSION["logado"] == TRUE) {   ?>
        <a class="waves-effect waves-light btn blue right public" href="cadastroGaleria.php">Publicar</a>
      <?php }?>  
    </div>
    </div>
  </nav>
  </div>

<!-- Start Gallery -->
<div id="gallery_page">
<div class="container">

  <div class="row">
    
    <?php 
      if(mysql_num_rows($query)){
        while ($result = mysql_fetch_array($query)) {
          
    ?>
      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><img class="gallery_image" 
      <?php 
        echo 'src="data:image/jpeg;base64,'.base64_encode($result["imagem"]).'"'; ?>
      ></a>
      <div class="gallery_text">
      <h1><?=$result['titulo']?></h1>
      <h2>Enviado <?=date('d/m/Y',strtotime($result["dtEnvio"]))?> por <a href="#"><?=$result['nomeVisitante']?></a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  
        <?php 
          
          $sqlTg = $sqlTag . $result["idGaleria"];

          //echo "<h1>{$sqlTag}</h1>";
          $resltTag = mysql_query($sqlTg,$conexao);

          if(mysql_num_rows($resltTag)){
              while ($tg = mysql_fetch_array($resltTag)) {

            ?>
            <a href="#"><?=$tg["tag"]?></a>,
        <?php }} ?>

        

      </h3>
      </div>
      </article>
      </div>

      <?php }} ?>

  </div>

  
  <!-- div class="row">
  <ul class="pagination centered">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active blue"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!">6</a></li>
    <li class="waves-effect"><a href="#!">7</a></li>
    <li class="waves-effect"><a href="#!">8</a></li>
    <li class="waves-effect"><a href="#!">9</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
  </div -->

</div>
</div>
<?php 
  include("rodape.php");
?>