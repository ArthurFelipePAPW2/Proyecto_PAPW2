<!DOCTYPE html>
<html class="landing-bg">
 <head>
   @include('Blades.General.general-css')
  </head>

 <body class="img-background2">

  @yield('sabias')  

<nav class="navbar navbar-inverse my-bar1 my-def-bar">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/articles">P I T Z E L </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          @include('Blades.General.general-search') 
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <img src="data:;base64,{{ Session::get('User')->{'avatar'} }}" class="img-responsive img-perfil img-rounded"> 
              <ul class="dropdown-menu">
                <li><a href="/perfil/{{ Session::get('User')->{'id-user'} }}">Perfil</a></li>
                <li role="separator" class="divider"></li>
                <li><a data-toggle="modal" data-target="#sendvdj">Enviar Sugerencia</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   @include('Blades.General.general-peticion-vdj') 

   @yield('game')

    @include('Blades.General.general-js')

  </body>
</html>
