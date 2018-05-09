@extends('master-principal')
@section('title','Gamers')

@section('sabias')
<img src="Imagenes/celebi.png" class="img-responsive img-celebi visible-sm-inline visible-md-inline visible-lg-inline">
<div class="sabias visible-sm-inline visible-md-inline visible-lg-inline">

   <h3>¿Sabías Qué?</h3>
 	 @if($curiosidad)
		<p> {{ $curiosidad->texto }}</p>
			@else
		<p>Whoops! Acá debería ir una curiosidad, seguramente a nuestros administradores les dio flojera agregar alguna, ¡Por qué no esperas a que se tomen un café y agreguen alguna? Por mientras, diviertete en nuestro sitio web!</p>
	@endif

</div>
@endsection

@section('game')

 <div class="container-fluid resena">
          <div class="row">
            <div class="col-md-9 article-info">
              <div class="col-md-5">
                <a href="/resena"><img src="Imagenes/titulo.jpg" class="img-responsive img-info-vdj img-rounded"></a>
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-6">
                   	<h2 class="title-vdj">Halo 5: Guardians</h2>
                </div>  
                <div class="col-md-6">
                  	<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
					<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
					<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
					<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart">
					<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">        
                </div>  
              </div>  
              <div class="row">
                <p class="text-vdj">Hablando de la campaña de publicidad previa al juego, nos hicieron creer que jugaríamos dos campañas diferentes con los anuncios de “Busca la verdad”, pero eso no tiene nada que ver con lo que vemos en el juego final. La única diferencia entre ambos personajes, son sus motivos para luchar, sus acompañantes y la habilidad que tiene Locke de escanear el ambiente para descubrir objetos útiles en el entorno. Fuera de ello, ambos son súper soldados que se controlan igual.

				Son 15 misiones en total que de acuerdo a la dificultad en la que juegues, los puedes pasar en 7-10 horas.</p>
              </div>
            </div>
          </div>
        </div>  
</div><br>

@endsection