<!doctype html>
<html class="landing-bg">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Own CSS -->
    <link rel="stylesheet" href="PitzelCSS.css">

    <title>Gaming & Things</title>
  </head>
  <body class="img-background">

   
    <div class="container-fluid">
        <br>
      <div class="row">
        <div class="col-md-2 col-md-offset-5">
              <img src="Imagenes/M_Logo.png" class="main-logo">
        </div>
      </div>
      <br>
        <header>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Logotipo De Mi Pagina -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><p><img src="Imagenes/triforce.png" class="triforce"></p></a>
              </div>
              <!-- Menu de opciones -->
              <div class="collapse navbar-collapse" id="navbar-1">

            
              <!--Logueo -->
               <ul class="nav navbar-nav navbar-right">
                   <li>
                    <a data-toggle="modal" data-target="#loginModal">
                      <span class="glyphicon glyphicon-log-in btn-login-nav"> LOGIN</span> 
                    </a>
                   </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
      </div>

        <!-- Ventana de logueo-->

         <div id="loginModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">   
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img">
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img">
                          </div>       
                          <div class="col-sm-8">
                          <h4>Ingresa con tu cuenta</h4>
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img">
                          </div>
                          <div class="col-sm-1">
                          <img src="Imagenes/rupia.png" class="img-responsive rupia-img">
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                           <form class="form-inline">
                               <div class="form-group">
                               <label class="sr-only" for="email">Email</label><input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email">
                               </div>
                                <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password">
                                </div>   
                               <button type="button" class="btn btn-default btn-xs btn-login" data-dismiss="modal">Login</button> 
                            </form>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>


      <div class="container " style="margin-top:10px">

        <div class="row">
          
          
          <div class="col-md-4">
            <img src="Imagenes/Link.png" class="img-responsive main-image-link">
          </div>

          <div class="col-md-1">           
          </div>

          <div class="col-md-7 sign-up-menu">  <br>   

          <div class="form-group row">
                <div class="col-sm-2">
                </div>
                <label class="col-sm-8 col-form-label registrar-text">Registrate Gratis!</label>
                <div class="col-sm-2">
                  <img src="Imagenes/navi.png" class="img-responsive navi-img">
                </div>
              </div>

          <hr>
            <form>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Nombre">
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="pass" placeholder="Password">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nacimiento</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="date">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Avatar</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="avatar">
                </div>
              </div>
              <div class="form-group row">
              <div class="col-md-2 col-md-offset-5">
               <button type="submit" class="btn btn-primary sign-up-btn">Sign in</button>
              </div>
        </div>
          </form>
          </div>

        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
