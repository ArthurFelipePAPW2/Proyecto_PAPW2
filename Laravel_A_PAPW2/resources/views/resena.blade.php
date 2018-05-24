@extends('master-resena')
@section('title','Gamers')

@section('comentarios')

<div class="slider-comments container slide active">
@for($x=1; $x <= count($Comentarios) ; $x++)
<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center>
						<a href="/perfil/{{ $Comentarios[$x-1]->Usuario->{'id-user'} }}"><img src="data:;base64,{{ $Comentarios[$x-1]->Usuario->{'avatar'} }}" class="img-responsive img-rounded img-comentario">	</a>			
						<p class="name-user-comentario">
							<a href="/perfil/{{ $Comentarios[$x-1]->Usuario->{'id-user'} }}">{{ $Comentarios[$x-1]->Usuario->{'name-user'} }}</a>
						</p>
						<br>
						@if($Comentarios[$x-1]->Usuario->{'id-user'} == $user->{'id-user'})
						{{Form::open(array('url' =>"BorrarComentario/".$Comentarios[$x-1]->{'id-review'}."/".$user->{'id-user'}."/".$InfoDeResena->{'id-videogame'},'method' => 'get'))}}
						{{ Form::button('<i class="glyphicon glyphicon-remove"></i>', array('type' => 'submit', 'class' => 'btn mover-izquierda')) }}		
						{{ Form::close() }}	
						@endif
						<div class="btn-group btn-util">
							@php
								$Encontrado = false
							@endphp

							@foreach($MisUseful as $Useful)						
							@if($Useful->{'id-review'} == $Comentarios[$x-1]->{'id-review'})
								{{Form::open(array('url' => 
								"BorrarUseful/".$user->{'id-user'}."/".$Comentarios[$x-1]->{'id-review'},'method' => 'get'))}}
					        	{{ Form::button('<i class="glyphicon glyphicon-thumbs-down"></i>', array('type' => 'submit', 'class' => 'btn')) }}		
					        	{{ Form::close() }}	
					        	@php
					        		$Encontrado = true
					        	@endphp
							@endif		

							@endforeach

							@if(count($MisUseful) == 0 || $Encontrado == false)
							{{Form::open(array('url' => 
								"AgregarUseful/".$user->{'id-user'}."/".$Comentarios[$x-1]->{'id-review'},'method' => 'get'))}}
					        	{{ Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>', array('type' => 'submit', 'class' => 'btn')) }}		
					        {{ Form::close() }}	
							@endif

							@php
							unset($Useful)
							@endphp
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">
					Posteado el {{ $Comentarios[$x-1]->{'updated_at'} }} 
					</p>
					<p class="likes-comentario">
						@php
							$Contar = 0
						@endphp
						@foreach($Likes as $Like)
						@if($Like->{'id-review'} == $Comentarios[$x-1]->{'id-review'})
						@php
							$Contar ++
						@endphp
						@endif
						@endforeach

						@if($Contar == 0)
						A nadie le parece buena esta reseña.
						@endif
						@if($Contar == 1)
						A una persona le parece buena esta reseña.
						@endif
						@if($Contar > 1)
						A <strong>{{ $Contar }}</strong> personas le parece buena esta reseña.
						@endif
					</p>
					<div class="row">
						<h3 class="titulo-comentario">{{ $Comentarios[$x-1]->{'titulo'} }} <br>
							@foreach($Scores as $puntuacion)
								@if($Comentarios[$x-1]->Usuario->{'id-user'} == $puntuacion->{'id-user'})

									@for($y=1; $y<=$puntuacion->{'points'}; $y++)
									<img src="../Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									@endfor

									@for($y=1; $y<=(5-$puntuacion->{'points'}); $y++)
									<img src="../Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
									@endfor

								@endif
							@endforeach				
							
	  					</h3>

						<p class="text-comentario">
							{{ $Comentarios[$x-1]->{'text-review'} }}
						</p>
					</div>
				</div>
			</div>
		</div>

		<br>
				@if($x % 5 === 0)
		</div>
		
		<div class="slider-comments container slide ">
		@endif
		@endfor
</div>

<div class="container next-comment">
	<div class="row">
		<div class="col-md-1 col-xs-1">
			<button class="left-arrow" id="left-arrow">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</button>
		</div>
		<div class="col-md-10 col-xs-10">
			<p class="buttonSlide"></p>
		</div>
		<div class="col-md-1 col-xs-1">
			<button class="right-arrow" id="right-arrow">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</button>
		</div>
	</div>
</div>
@endsection


@section('resenas')
<div class="container resena">
	      	<div class="row">
	        	<div class="col-md-12 article-info-resena">
	        		<div class="col-md-6">     					
	        			<img src="data:;base64,{{ $InfoDeResena->{'cover'} }}" class="img-responsive img-resena img-rounded">
	        		</div>
  					<div class="col-md-6">
  						<div class="table-responsive">
							<table class="table table-info">
							 <tr>
							 	<td>Titulo</td>
							 	<td>{{ $InfoDeResena->{'name-videogame'} }}</td>
							 </tr>
							 <tr>
							 	<td>Plataforma:</td>
							 	<td>
							 		@foreach($InfoDeResena->ForPlatforms as $plataforma)
							 		&raquo;
							 			{{ $plataforma->{'name-platform'} }} <br>
							 		@endforeach
							 </td>
							 </tr>
							 <tr>
							 	<td>Productor(es):</td>
							 	<td>{{ $InfoDeResena->{'productor'} }}</td>
							 </tr>
							 <tr>
							 	<td>Desarrollador:</td>
							 	<td>{{ $InfoDeResena->developer->{'name-distributor'} }}</td>
							 </tr>
							<tr>
							 	<td>Género(s):</td>
							 	<td>
							 		@foreach($InfoDeResena->ForGenres as $genero)
							 		&raquo;
							 			{{ $genero->{'name-gender'} }} <br>
							 		@endforeach
							 	</td>
							 </tr>
							 <tr>
							 	<td>Distribuidora(s):</td>
							 	<td>{{ $InfoDeResena->distributor->{'name-distributor'} }}</td>
							 </tr>
							 <tr>
							 	<td>Modo de Juego:</td>
							 	<td>{{ $InfoDeResena->{'mode'} }}</td>
							 </tr>
							 <tr>
							 	<td>Calificación:</td>
							 	<td>
							 		@if($CantidadDeCorazonesEnviados != 0)
							 		@for($x=0; $x< $CorazonesLlenos; $x++)
							 		<img src="../Imagenes/Full_Heart.png" class="img-responsive img-heart-resena">
									@endfor
									@for($x=0; $x< $CorazonesMedios; $x++)
									<img src="../Imagenes/Half_Heart.png" class="img-responsive img-heart-resena">
									@endfor
									@for($x=0; $x< (5-$CantidadDeCorazonesEnviados); $x++)
							 		<img src="../Imagenes/Empty_Heart.png" class="img-responsive img-heart-resena">
									@endfor
									@else
									Este juego no ha sido puntuado
									@endif
  								</td>
							 </tr>
							</table>
						</div>
  					</div>	  					
  				</div>
            </div>  
        </div>
       	   	<!--Fin de reseña-->
		<div class="container resena">
		       	<div class="row">
				    <div class="col-md-12 article-info-sinopsis">
				        <h2 clasS="text-descripcion">Descripción</h2>
				        <p> {{ $InfoDeResena->{'description'} }}</p>
			  		</div>
			  	</div>
		</div>
		<br>
@endsection

@section('formulario')
<div class="container resena comentar">
	<div class="row">
		<div class="col-md-2">
			<center><img src="data:;base64,{{ $user->{'avatar'} }}" class="img-responsive img-rounded img-comentario"><p class="me-user-comentario"><p class="name-user-comentario">{{ $user->{'name-user'} }}</p><br></center>
		</div>
		<div class="col-md-10">
			<p class="fecha-comentario">Hoy es {{ $fecha }}</p>
			<div class="row">

				{{Form::open(array('url' => 'SendReview','method' => 'post'))}}
				{{Form::hidden('videogame',$InfoDeResena->{'id-videogame'})}}
				{{ Form::text('titulo-comentario', null, array('placeholder'=>'Titulo de tu comentario','id' => 'texto-comentar','required')) }}
				<br>
				{{ Form::textarea('comentario-texto', null, array('placeholder'=>'¿Qué te pareció este juego?','required')) }}
				<br>
				<div class="rated-heart" id="corazon1">
					{{ Form::radio('rate', '1',null, ['onClick' => 'Evaluar(1)','checked']) }}
				</div>
				<div class="sin-rating" id="corazon2">
					{{ Form::radio('rate', '2',null, ['onClick' => 'Evaluar(2)']) }}
				</div>
				<div class="sin-rating" id="corazon3">
					{{ Form::radio('rate', '3',null, ['onClick' => 'Evaluar(3)']) }}
				</div>
				<div class="sin-rating" id="corazon4">
					{{ Form::radio('rate', '4',null, ['onClick' => 'Evaluar(4)']) }}
				</div>
				<div class="sin-rating" id="corazon5">
					{{ Form::radio('rate', '5',null, ['onClick' => 'Evaluar(5)']) }}
				</div>
				
				{{ Form::submit('Comentar') }}

			{{Form::close()}}


			</div>
		</div>
	</div>
</div><br>
@endsection

@section('botonfav')
@if($Favorito != NULL)

	{{Form::open(array('url' => 'BorrarFavorito','method' => 'post'))}}
	{{ Form::hidden('usuario', $user->{'id-user'}) }}
	{{ Form::hidden('videogame', $InfoDeResena->{'id-videogame'}) }} 
	<button class="botonFavorito favorito"></button>
	{{Form::close()}}

@else

	{{Form::open(array('url' => 'AgregarFavorito','method' => 'post'))}}
	{{ Form::hidden('usuario', $user->{'id-user'}) }} 
	{{ Form::hidden('videogame', $InfoDeResena->{'id-videogame'}) }} 
	<button class="botonFavorito Nofavorito"></button>
	{{Form::close()}} 

@endif

@endsection

@section('modificar-review')
@if($MiReview != NULL)
<button class="Modificar-review" data-toggle="modal" data-target="#modifyreview">
	<span class="glyphicon glyphicon-pencil"></span>
</button>
		<div id="modifyreview" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">                        
	                          <div class="col-sm-12 Modal-Text">
	                          <h4>Modificar Review</h4>
	                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <center>
                            {{ Form::open(array('url' => 'ModifyReview','method' => 'post')) }}
                            {{ Form::hidden('user', $user->{'id-user'}) }}   
                            {{ Form::hidden('videogame', $InfoDeResena->{'id-videogame'} ) }}   
                           <div class="form-group">

                         {{ Form::text('titulo', $MiReview->{'titulo'}, array('required','class'=>'form-control')) }}    
                        </div> 
                         <div class="form-group">

                         {{ Form::textarea('texto', $MiReview->{'text-review'}, array('required','class'=>'textarea-agregar-vdj')) }}    
                        </div>   

                        <div class="form-group radios-modal">
                        	
	                        	<div class="rated-heart" id="corazon1-modificar">
								{{ Form::radio('rate', '1',null, ['onClick' => 'EvaluarMoficiar(1)','checked']) }}
							 	</div>
							 	<div class="sin-rating" id="corazon2-modificar">
								{{ Form::radio('rate', '2',null, ['onClick' => 'EvaluarMoficiar(2)']) }}
								</div>
								<div class="sin-rating" id="corazon3-modificar">
									{{ Form::radio('rate', '3',null, ['onClick' => 'EvaluarMoficiar(3)']) }}
								</div>
								<div class="sin-rating" id="corazon4-modificar">
									{{ Form::radio('rate', '4',null, ['onClick' => 'EvaluarMoficiar(4)']) }}
								</div>
								<div class="sin-rating" id="corazon5-modificar">
									{{ Form::radio('rate', '5',null, ['onClick' => 'EvaluarMoficiar(5)']) }}
								</div>  

                        </div>                                                    
                                  {{Form::button('Modificar', array('type' => 'submit', 'class' => 'btn btn-default btn-xs btn-login'))}}           
                            {{Form::close()}}
                      </center>
                    </div>                  
                </div>
                </div>
            </div>
 @endif
@endsection