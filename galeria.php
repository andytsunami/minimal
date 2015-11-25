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

<!-- Gallery Navigation -->
  <div class="navbar-fixed" id="sub-nav">
  <nav class="no-shadow" id="sub-nav">
    <div class="nav-wrapper grey darken-2" id="sub-nav">
    <div class="container">

      <!-- Mobile Hamburguer Icon -->
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- Menu Links -->
      <ul class="left hide-on-med-and-down" id="sub-nav">
        <li><a href="#" id="sub-nav-line">Novidades</a></li>
        <li><a href="#" id="sub-nav-line">Flat Design</a></li>
        <li><a href="#" id="sub-nav-line">Metro Design</a></li>
        <li><a href="#" id="sub-nav-line">Apple Design</a></li>
        <li><a href="#" id="sub-nav-line">Material Design</a></li>
      </ul>
      </div>
    </div>
  </nav>
  </div>

<!-- Start Gallery -->
<div id="gallery_page">
<div class="container">

  <div class="row">
  
      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_03.jpg"></a>
      <div class="gallery_text">
      <h1>Neebo</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Apple Design</a>, <a href="#">Landing Page</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_02.jpg"></a>
      <div class="gallery_text">
      <h1>Materil</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Material Design</a>, <a href="#">Website</a>, <a href="#">Dashboard</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_01.jpg"></a>
      <div class="gallery_text">
      <h1>Flagsmith</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Flat Design</a>, <a href="#">Website</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

  </div>

  <div class="row">
  
      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_03.jpg"></a>
      <div class="gallery_text">
      <h1>Neebo</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Apple Design</a>, <a href="#">Landing Page</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_02.jpg"></a>
      <div class="gallery_text">
      <h1>Materil</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Material Design</a>, <a href="#">Website</a>, <a href="#">Dashboard</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_01.jpg"></a>
      <div class="gallery_text">
      <h1>Flagsmith</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Flat Design</a>, <a href="#">Website</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

  </div>

  <div class="row">
  
      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_03.jpg"></a>
      <div class="gallery_text">
      <h1>Neebo</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Apple Design</a>, <a href="#">Landing Page</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_02.jpg"></a>
      <div class="gallery_text">
      <h1>Materil</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Material Design</a>, <a href="#">Website</a>, <a href="#">Dashboard</a>.</h3>
      </div>
      </article>
      </div>

      <div class="col s4">
      <article class="gallery_project">
      <a href="#"><image class="gallery_image" src="images/gallery/project_01.jpg"></a>
      <div class="gallery_text">
      <h1>Flagsmith</h1>
      <h2>Enviado 12/11/2015 por <a href="#">Nome da Pessoa</a></h2>
      </div>
      <div class="gallery_tags">
      <h3>Tags:  <a href="#">Flat Design</a>, <a href="#">Website</a>, <a href="#">Project</a>.</h3>
      </div>
      </article>
      </div>

  </div>

  <div class="row">
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
  </div>

</div>
</div>
<!-- Footer --> 
  <footer class="page-footer">
  <div class="footer-copyright grey darken-4">
    <div class="container">
      © 2015 Minimal Design - Universidade Anhembi Morumbi
      <a class="white-text right" href="sobre_nos.php" style="margin-left: 20px;">Sobre Nos</a>
      <a class="white-text right" href="inscreva_se.php">Inscrever-se</a>
    </div>
  </div>
  </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>