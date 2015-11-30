<?php 
  include("cabecalho.php");
  ini_set('display_errors', 'on');


  $boasVindas = "Olá e bem vindo!";

  if (!empty($_SESSION['nome'])) {
    $boasVindas = "Olá {$_SESSION['nome']}, seja bem vindo!";
  }

  require_once 'config.php';
  
  $conexao = @mysql_connect($host, $usuario, $senha) or exit(mysql_error());
  mysql_set_charset("utf8", $conexao);
  
  mysql_select_db($banco);

  $sqlMetro = "select g.titulo as titulo, g.data as dtEnvio, g.imagem imagem
 from galeria g 
 left join tag_galeria tg on tg.id_galeria = g.id
 where tg.id_tag = 4
 order by g.data desc limit 3;";

  $sqlApple = "select g.titulo as titulo, g.data as dtEnvio, g.imagem imagem
 from galeria g 
 left join tag_galeria tg on tg.id_galeria = g.id
 where tg.id_tag = 5
 order by g.data desc limit 3;";

  $sqlMaterial = "select g.titulo as titulo, g.data as dtEnvio, g.imagem imagem
 from galeria g 
 left join tag_galeria tg on tg.id_galeria = g.id
 where tg.id_tag = 1
 order by g.data desc limit 3;";

 $sqlFlat = "select g.titulo as titulo, g.data as dtEnvio, g.imagem imagem
 from galeria g 
 left join tag_galeria tg on tg.id_galeria = g.id
 where tg.id_tag = 3
 order by g.data desc limit 3;";


 $queryMetro = mysql_query($sqlMetro, $conexao);
 $queryApple = mysql_query($sqlApple, $conexao);
 $queryMaterial = mysql_query($sqlMaterial, $conexao);
 $queryFlat = mysql_query($sqlFlat, $conexao);

 $countMetro = 0;
 $countApple = 0;
 $countMaterial = 0;
 $countFlat = 0;

 function getMes($data){

  $mes = explode("-", $data);
  $mes = $mes[1];
  

  switch ($mes) {
    case 1:
      $mes = "Janeiro";
      break;
      case 2:
      $mes = "Fevereiro";
      break;
      case 3:
      $mes = "Março";
      break;
      case 4:
      $mes = "Abril";
      break;
      case 5:
      $mes = "Maio";
      break;
      case 6:
      $mes = "Junho";
      break;
      case 7:
      $mes = "Julho";
      break;
      case 8:
      $mes = "Agosto";
      break;
      case 9:
      $mes = "Setembro";
      break;
      case 10:
      $mes = "Outubro";
      break;
      case 11:
      $mes = "Novembro";
      break;
      case 12:
      $mes = "Dezembro";
      break;
    
    default:
     $mes = "Indefinido";
      break;
  }

    echo $mes;

 }
 

?>
<!-- Fim do cabecalho -->
<!-- Start Content -->

<!-- Minimal Design Introduction -->
  <div class="mindesign" id="intro_site">
  <div class="container">
  <h1><?=$boasVindas?></h1>
  <p>Aqui no Minimal Design, você pode acessar nosso Blog para aprender mais sobre os conceitos de Design Minimalista, com áreas dedicadas para o Flat, Metro, Apple e Material Design.</p>
  </div>
  </div>
<!-- Blog Introduction -->
  <div class="mindesign" id="blog_intro">
  <div id="blog_intro_header">
  <div class="container"><h1>Visite nosso Blog</h1></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s4 visite-container blog_intro_text clica" data-local="blog/design_minimalista/o_que_e.php">
        <img src="images/icon_designminimalista.svg" class="icon-design-minimalista" style="margin-left: -10px;">
        <div class="visite">
          <h1>Design Minimalista</h1></a>
          <p>Conheça os conceitos básicos sobre o Design Minimalista.</p>
        </div>
      </div>

      <div class="col s4 visite-container blog_intro_text clica" data-local="blog/ux/o_que_e.php">
        <img src="images/icon_userexperience.svg" class="icon-design-minimalista">
        <div class="visite">
          <h1>User Experience</h1></a>
          <p>A experiência do usuário faz parte de Arquitetura de Informação e é uma das partes vitais da usabilidade.</p>
        </div>
      </div>

      <div class="col s4 visite-container blog_intro_text clica" data-local="blog/flat/origem.php">
        <img src="images/icon_flatdesign.svg" class="icon-design-minimalista">
        <div class="visite">
          <h1>Flat Design</h1></a>
          <p>O Flat Design é uma das tendências do momento, e um dos melhores exemplos do Design Minimalista contemporâneo.</p>
        </div>
      </div>
  
      <div class="row">
        <div class="col s4 visite-container blog_intro_text clica" data-local="blog/metro/historia.php">
          <img src="images/icon_metrodesign.svg" class="icon-design-minimalista">
          <div class="visite">
            <h1>Metro Design</h1></a>
            <p>Iniciado pela Microsoft, o Metro Design é um estilo inspirado no Flat Design, utilizando amplamente nos produtos Microsoft.</p>
          </div>
        </div>

        <div class="col s4 visite-container blog_intro_text clica" data-local="blog/apple/historia.php">
          <img src="images/icon_appledesign.svg" class="icon-design-minimalista">
          <div class="visite">
            <h1>Apple Design</h1></a>
            <p>A partir do iOS 7, a Apple atualizou suas interfaces com um estilo inspirado no Flat Design.</p>
          </div>
        </div>

        <div class="col s4 visite-container blog_intro_text clica" data-local="blog/material/historia.php">
          <img src="images/icon_materialdesign.svg" class="icon-design-minimalista">
          <div class="visite">
            <h1>Material Design</h1></a>
            <p>Com o Android Lollipop, a Google criou o Design Material, com elementos de papel virtual e sombras em uma interface 2D.</p>
          </div>
        </div>
    </div>
  </div>
  </div>

<!-- Flat Design Gallery --> 
  <div class="mindesign" id="flat_design">
  <div id="flat_intro_header">
  <div class="container"><object id="header_icon" type="image/svg+xml" data="images/icon_flatdesign_small.svg"></object><h1>Flat Design: Melhores do Mês</h1></div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col s8 offset-s1"><p>Os Websites abaixo foram escolhidos como melhores do mês na categoria Flat Design</p>
    </div>
    </div>

    <div class="row">
      <?php 
        if (mysql_num_rows($queryFlat)) {
            while ($resultFlat = mysql_fetch_array($queryFlat)) {

      ?>
      <div class="col s4">
        <div class="best_flat waves-effect rank" style="background:      
        <?php 
          echo 'url(data:image/jpeg;base64,'.base64_encode($resultFlat["imagem"]).');'; ?>"
      > <!-- Fecha div-->
         <div class="best_title"><h1><?=$resultFlat['titulo']?></h1><h2>Rank <?= ++$countFlat?> - <?=getMes($resultFlat['dtEnvio'])?></h2></div></div>
      </div>

      <?php }} ?>
    </div>

    <div class="row">
    <div class="col s2 offset-s10">
    <a class="waves-effect waves-light btn blue" href="galeria.php?tag=4">Ver mais</a>
    </div>
    </div>

  </div>
  </div>

<!-- Metro Design Gallery -->
  <div class="mindesign" id="metro_design">
  <div id="metro_intro_header">
  <div class="container"><object id="header_icon" type="image/svg+xml" data="images/icon_metrodesign_small.svg"></object><h1>Metro Design: Melhores do Mês</h1></div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col s8 offset-s1"><p>Os Websites abaixo foram escolhidos como melhores do mês na categoria Metro Design</p>
    </div>
    </div>

    <div class="row">
      <?php 
        if (mysql_num_rows($queryMetro)) {
            while ($resultMetro = mysql_fetch_array($queryMetro)) {

      ?>
      <div class="col s4">
        <div class="best_flat waves-effect rank" style="background:      
        <?php 
          echo 'url(data:image/jpeg;base64,'.base64_encode($resultMetro["imagem"]).');'; ?>"
      > <!-- Fecha div-->
         <div class="best_title"><h1><?=$resultMetro['titulo']?></h1><h2>Rank <?= ++$countMetro?> - <?=getMes($resultMetro['dtEnvio'])?></h2></div></div>
      </div>

      <?php }} ?>
    </div>

    <div class="row">
    <div class="col s2 offset-s10">
    <a class="waves-effect waves-light btn blue" href="galeria.php?tag=4">Ver mais</a>
    </div>
    </div>

  </div>
  </div>
<!-- Apple Design Gallery -->
  <div class="mindesign" id="apple_design">
  <div id="apple_intro_header">
  <div class="container"><object id="header_icon" type="image/svg+xml" data="images/icon_appledesign_small.svg"></object><h1>Apple Design: Melhores do Mês</h1></div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col s8 offset-s1"><p>Os Websites abaixo foram escolhidos como melhores do mês na categoria Apple Design</p>
    </div>
    </div>

    <div class="row">
      <?php 
        if (mysql_num_rows($queryApple)) {
            while ($resultApple = mysql_fetch_array($queryApple)) {

      ?>
      <div class="col s4">
        <div class="best_flat waves-effect rank" style="background:      
        <?php 
          echo 'url(data:image/jpeg;base64,'.base64_encode($resultApple["imagem"]).');'; ?>"
      > <!-- Fecha div-->
         <div class="best_title"><h1><?=$resultApple['titulo']?></h1><h2>Rank <?= ++$countApple?> - <?=getMes($resultApple['dtEnvio'])?></h2></div></div>
      </div>

      <?php }} ?>
    </div>

    <div class="row">
    <div class="col s2 offset-s10">
    <a class="waves-effect waves-light btn blue" href="galeria.php?tag=5">Ver mais</a>
    </div>
    </div>

  </div>
  </div>
<!-- Material Design Gallery --> 
  <div class="mindesign" id="material_design">
  <div id="material_intro_header">
  <div class="container"><object id="header_icon" type="image/svg+xml" data="images/icon_materialdesign_small.svg"></object><h1>Material Design: Melhores do Mês</h1></div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col s8 offset-s1"><p>Os Websites abaixo foram escolhidos como melhores do mês na categoria Material Design</p>
    </div>
    </div>

     <div class="row">
      <?php 
        if (mysql_num_rows($queryMaterial)) {
            while ($resultMaterial = mysql_fetch_array($queryMaterial)) {

      ?>
      <div class="col s4">
        <div class="best_flat waves-effect rank" style="background:      
        <?php 
          echo 'url(data:image/jpeg;base64,'.base64_encode($resultMaterial["imagem"]).');'; ?>"
      > <!-- Fecha div-->
         <div class="best_title"><h1><?=$resultMaterial['titulo']?></h1><h2>Rank <?= ++$countMaterial?> - <?=getMes($resultMaterial['dtEnvio'])?></h2></div></div>
      </div>

      <?php }} ?>
    </div>

    <div class="row">
    <div class="col s2 offset-s10">
    <a class="waves-effect waves-light btn blue" href="galeria.php?tag=1">Ver mais</a>
    </div>
    </div>
      </div>
    </div>

    <?php 
      include("rodape.php");
    ?>