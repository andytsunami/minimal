<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <meta charset="UTF-8">

    </head>

    <body>

  <header>
<!-- Start Navigation -->
  <div class="navbar-fixed">
  <nav class="no-shadow">
    <div class="nav-wrapper grey darken-4">
    <div class="container">
      <a href="#" class="brand-logo">Minimal Design</a>


      <!-- Mobile Hamburguer Icon -->
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- Menu Links -->
      <div class="row">
      <ul class="left hide-on-med-and-down" style="margin-left: 250px;">
        <li><a href="index.php">Início</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="galeria.php">Galeria</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li id="user_login">  
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Login</a>


        <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Modal Header</h4>
              <p>A bunch of text</p>
            </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>
        </li>
      </ul>
      </div>

      <!-- Mobile Menu Links
      <ul class="side-nav">
        <li><a href="#">Início</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Galeria</a></li>
        <li><a href="#">Sobre</a></li>
      </ul>
       -->
    </div>
    </div>
  </nav>
  </div>
<!-- End Navigation -->
  </header>
<!-- Start Blog -->
<div id="blog_page">
<!-- Blog Header [Breadcumbs] -->
<div class="container">
  <div id="row">
  <div class="col s12">
  <div id="blog_breadcrumbs">
    <div class="col s8">
      <a href="#!" class="breadcrumb">Início</a>
      <a href="#!" class="breadcrumb">Blog</a>
    </div>

    <div class="col s4">

    </div>
  </div>
  </div>

  </div>

<!-- Content -->
<div class="row">
  <div class="col s8" id="blog_content">
  <h4>Bem vindo ao Blog do Minimal Design</h4>
  <p>Utilize o menu ao lado para navegar pelos conteúdos de nosso website.</p>
  <p>Para ver exemplos sobre os conteúdos, você pode acessar a galeria!</p>
 
</p>
  </div>

<!-- Sidemenu -->
  <div class="col s1"><p></div>
  <div class="col s3" id="side_menu">
    <ul class="collection collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">Design Minimalista</div>
      <div class="collapsible-body">
      <a href="blog/design_minimalista/o_que_e.php" class="collection-item">O que é</a>
      <a href="#!" class="collection-item">Diferenças entre Arte e Design</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Minimalismo em User Interfaces</a>
      <a href="#!" class="collection-item">Outras aplicações</a>
      </div>
    </li>
    <li>
      <div class="collapsible-header">User Experience</div>
      <div class="collapsible-body">
      <a href="#!" class="collection-item">O que é</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Como utilizar</a>
      <a href="#!" class="collection-item">Aplicações</a>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Flat Design</div>
      <div class="collapsible-body">
      <a href="#!" class="collection-item">Origem</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Skeuemorphic vs Flat</a>
      <a href="#!" class="collection-item">Vantagens</a>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Metro Design</div>
      <div class="collapsible-body">
      <a href="#!" class="collection-item">História</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Aplicações</a>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Apple Design</div>
      <div class="collapsible-body">
      <a href="#!" class="collection-item">História</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Aplicações</a>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Material Design</div>
      <div class="collapsible-body">
      <a href="#!" class="collection-item">História</a>
      <a href="#!" class="collection-item">Conceitos</a>
      <a href="#!" class="collection-item">Aplicações</a>
      </div>
    </li>

  </ul>
  <!--
    <div class="collection">
      <a href="#!" class="collection-item active">Design Minimalista</a>
      <a href="#!" class="collection-item">User Experience</a>
      <a href="#!" class="collection-item">Flat Design</a>
      <a href="#!" class="collection-item">Metro Design</a>
      <a href="#!" class="collection-item">Apple Design</a>
      <a href="#!" class="collection-item">Material Design</a>
    </div>
    -->
  </div>

</div>

</div>
</div>
<!-- Footer --> 
  <footer class="page-footer">
  <div class="footer-copyright grey darken-4">
    <div class="container">
      © 2015 Minimal Design - Universidade Anhembi Morumbi
      <a class="white-text right" href="sobre_nos.php" style="margin-left: 20px;">Sobre Nos</a>
      <a class="white-text right" href="inscreva0se,oho">Inscrever-se</a>
    </div>
  </div>
  </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>