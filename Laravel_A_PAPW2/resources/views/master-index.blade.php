 <!doctype html>
<html class="landing-bg">
  <head>
   @include('Blades.General.general-css')
  </head>
  <body class="img-background">

<div class="container-fluid">
        <br>
      <div class="row">
        <div class="col-md-2 col-md-offset-5">
              <center><a href="principal.php"></a><img src="Imagenes/M_Logo.png" class="main-logo"></center>
        </div>
      </div>
      <br>
        <header>
          <nav class="navbar navbar-default navbar-index">
            <div class="container-fluid">
              <!-- Logotipo De Mi Pagina -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="/articles" class="navbar-brand"><p><img src="Imagenes/triforce.png" class="triforce"></p></a>
              </div>
              <!-- Menu de opciones -->
              <div class="collapse navbar-collapse navbar-general" id="navbar-1">
              <!--Logueo -->
               <ul class="nav navbar-nav navbar-right">
                   <li>
                    <a data-toggle="modal" data-target="#loginModal">
                      <span class="glyphicon glyphicon-log-in btn-login-nav"> <label>LOGIN</label></span> 
                    </a>
                   </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
</div>

      <div id="loginModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">   
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img 
                          visible-sm-inline visible-md-inline visible-lg-inline">
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img
                          visible-sm-inline visible-md-inline visible-lg-inline">
                          </div>       
                          <div class="col-sm-8 Modal-Text">
                          <h4>Ingresa con tu cuenta</h4>
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img
                          visible-sm-inline visible-md-inline visible-lg-inline">
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img
                          visible-sm-inline visible-md-inline visible-lg-inline">
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           @yield('login')
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <div id="rec-pass" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">   
                          <h4>Recupera tu contraseña</h4>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form class="form-inline">
                               ¿Pregunta pregunta pregunta pregunta pregunta pregunta? <br><br><input type="text"><br><br>
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Enviar</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>


            <div class="container " style="margin-top:10px">

        <div class="row">
          
          
          <div class="col-md-4">
            <img src="Imagenes/Link.png" class="img-responsive main-image-link
            visible-sm-inline visible-md-inline visible-lg-inline"><br><br><center><button class="pass-lost" data-toggle="modal" data-target="#rec-pass">¿No recuerdas tu contraseña?</button></center>
          </div>

          <div class="col-md-1">           
          </div>

          <div class="col-md-7 sign-up-menu">  <br>   

          <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <center><label class="col-sm-8 col-form-label registrar-text">¡Regístrate Gratis!</label></center>
                <div class="col-sm-2">
                  <img src="Imagenes/navi.png" class="img-responsive navi-img
                  visible-sm-inline visible-md-inline visible-lg-inline">
                </div>
              </div>

          <hr>

          @yield('formulario')
           
          </div>

        </div>
      </div>
      @include('Blades.General.general-js')
      <script type="text/javascript" src="{!! asset('funciones.js') !!}"></script>
  </body>
</html>
