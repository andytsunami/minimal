<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <meta charset="UTF-8">

        <script type="text/javascript">
          $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal-trigger').leanModal();
        });
          </script>

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
      <a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>

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
        <button data-target="modal1" class="waves-effect waves-light btn modal-trigger blue">Login</button>
        </li>
      </ul>      
      </div>

      <ul class="side-nav">
        <li><a href="#">Início</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Galeria</a></li>
        <li><a href="#">Sobre</a></li>
      </ul>

    </div>
    </div>
  </nav>
  </div>
<!-- End Navigation -->
  </header>

        <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Login</h4>
              <form class="center">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
              </form>
            </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-light btn-flat">Entrar</a>
            <a href="cadastro.php" class="waves-effect waves-light btn-flat">Cadastrar</a>
          </div>
        </div>