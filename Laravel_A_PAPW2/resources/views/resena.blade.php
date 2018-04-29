@extends('master-resena')
@section('title','Gamers')

@section('titulo')
Halo 5: Guardians
@endsection

@section('img')
<img src="Imagenes/titulo.jpg" class="img-responsive img-resena img-rounded">
@endsection

@section('plataforma')
Xbox One
@endsection

@section('productor')
Josh Holmes
@endsection

@section('desarrollador')
343 Industries
@endsection

@section('genero')
First Person Shooter
@endsection

@section('distribuidora')
Microsoft Studios
@endsection

@section('modo')
Multijugador y un Jugador
@endsection

@section('calificacion')
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
@endsection

@section('descripcion') 
<p> Hablando de la campaña de publicidad previa al juego, nos hicieron creer que jugaríamos dos campañas diferentes con los anuncios de “Busca la verdad”, pero eso no tiene nada que ver con lo que vemos en el juego final. La única diferencia entre ambos personajes, son sus motivos para luchar, sus acompañantes y la habilidad que tiene Locke de escanear el ambiente para descubrir objetos útiles en el entorno. Fuera de ello, ambos son súper soldados que se controlan igual. <br><br>

Son 15 misiones en total que de acuerdo a la dificultad en la que juegues, los puedes pasar en 7-10 horas. </p>
@endsection

@section('img-user') 
<img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario">
@endsection

@section('fecha') 
Posteado el 2018-03-29
@endsection

@section('likes') 
50
@endsection

@section('dislikes') 
10
@endsection

@section('titulo-comentario')
Buen Juego
@endsection

@section('user-rate')
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
<img src="Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
@endsection

@section('texto-comentario')
La verdad es un buen juego, de hecho jamas lo he jugado pero se ve bonito, ademas me recuerda a la infancia, donde jugaba en la clase de tic a el Halo y por eso ahora no se programar, es muy triste pero es la verdad. <br><br>
Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno Texto de relleno 
@endsection

@section('own-img')
<img src="Imagenes/Anon.jpg" class="img-responsive img-rounded img-comentario">
@endsection

@section('own-user')
Usuario
@endsection

@section('today')
Hoy es 2018-03-29 
@endsection

@section('own-title')
<input type="text" name="titulo-comentario" placeholder="Titulo de tu comentario" id="texto-comentar" required>
@endsection

@section('own-review')
<textarea placeholder="¿Qué te pareció este juego?" required></textarea>
@endsection

@section('own-rate')
<div class="rated-heart" id="corazon1"><input checked type="radio" name="ratio" required onclick="Evaluar(1)"></div>
<div class="sin-rating" id="corazon2"><input type="radio" name="ratio" required onclick="Evaluar(2)"></div>
<div class="sin-rating" id="corazon3"><input type="radio" name="ratio" required onclick="Evaluar(3)"></div>
<div class="sin-rating" id="corazon4"><input type="radio" name="ratio" required onclick="Evaluar(4)"></div>
<div class="sin-rating" id="corazon5"><input type="radio" name="ratio" required onclick="Evaluar(5)"></div>
@endsection
