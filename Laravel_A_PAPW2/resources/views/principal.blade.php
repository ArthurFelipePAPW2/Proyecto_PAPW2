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

  @foreach ($videojuegos as $videogame)
   <div class="container-fluid resena">
            <div class="row">
              <div class="col-md-9 article-info">
                <div class="col-md-5">
                  <a href="/resena/{{$videogame->{'id-videogame'} }}">
                    <center>
                    <img src="data:;base64,{{ $videogame->{'cover'} }}" class="img-responsive img-info-vdj img-rounded"></center>
                  </a>
              </div>
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-8">
                     	<h2 class="title-vdj">{{ $videogame->{'name-videogame'} }}</h2>
                  </div>  
                  <div class="col-md-4"> <center>
                    	<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  					<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  					<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart">
  					<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart">
  					<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart">  </center>      
                  </div>  
                </div>  
                <div class="row">
                  <p class="text-vdj">{{ $videogame->{'description'} }}</p>
                </div>
              </div>
            </div>
          </div>  
  </div><br>
  @endforeach

  <div class="container nav-button">
    <div class="row">
      <div class="col-md-9"> <center>{!! $videojuegos->render() !!}</center></div>
    </div>
  </div>

 
@endsection