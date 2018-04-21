<!DOCTYPE html>
<html class="landing-bg">
 <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="PitzelCSS.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

  </head>
 <body class="img-background2">

    <img src="Imagenes/celebi.png" class="img-responsive img-celebi visible-sm-inline visible-md-inline visible-lg-inline">
    <div class="sabias">
      <h3>¿Sabías Qué?</h3>
      <p>@yield('sabias')</p>
    </div>

<nav class="navbar navbar-inverse my-bar1" my-def-bar">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">P I T Z E L </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Link 1</a></li> 
            <li><a href="#">Link 2</a></li> 
            <li><a href="#">Link 3</a></li> 
            <li><a href="#">Link 4</a></li>         
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control search-bar" placeholder="Buscar"><button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               @include('Blades.General.general-img-user') 
              <ul class="dropdown-menu">
                <li><a href="/perfil">Perfil</a></li>
                <li><a href="#">Configurar Cuenta</a></li>
                <li><a href="#">Alguna Cosa</a></li>
                <li role="separator" class="divider"></li>
                <li><a data-toggle="modal" data-target="#sendvdj">Enviar Sugerencia</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   @include('Blades.General.general-peticion-vdj') 
   @include('Blades.Principal.principal-review')
   @include('Blades.Principal.principal-review')
   @include('Blades.Principal.principal-review')
   @include('Blades.Principal.principal-review')



<br><br>
    <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-1 visible-sm-inline visible-md-inline visible-lg-inline">
              <div class="btn-group nav-button">
                <button type="button" class="btn"><span class="glyphicon glyphicon-menu-left"></span></button>
            <button type="button" class="btn">1</button>
            <button type="button" class="btn">2</button>
            <button type="button" class="btn">3</button>
            <button type="button" class="btn">4</button>
            <button type="button" class="btn">5</button>
            <button type="button" class="btn"><span class="glyphicon glyphicon-menu-right"></span></button>
          </div>
        </div>
      </div>

      <div class="row">
            <div class="col-md-8 col-md-offset-1 visible-xs-inline">
              <div class="btn-group nav-button">
                <button type="button" class="btn"><span class="glyphicon glyphicon-menu-left"></span></button>
            <button type="button" class="btn">1</button>
            <button type="button" class="btn">2</button>
            <button type="button" class="btn">3</button>
            <button type="button" class="btn">4</button>
            <button type="button" class="btn">5</button>
            <button type="button" class="btn"><span class="glyphicon glyphicon-menu-right"></span></button>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>



  </body>
</html>
