 <div class="container resena">
	      	<div class="row">
	        	<div class="col-md-12 article-info-resena">
	        		<div class="col-md-6">
	        			@yield('img')
  					</div>
  					<div class="col-md-6">
  						<div class="table-responsive">
							<table class="table table-info">
							 <tr>
							 	<td>Titulo</td>
							 	<td>@yield('titulo')</td>
							 </tr>
							 <tr>
							 	<td>Plataforma:</td>
							 	<td>@yield('plataforma')</td>
							 </tr>
							 <tr>
							 	<td>Productor(es):</td>
							 	<td>@yield('productor')</td>
							 </tr>
							 <tr>
							 	<td>Desarrollador:</td>
							 	<td>@yield('desarrollador')</td>
							 </tr>
							<tr>
							 	<td>Género(s):</td>
							 	<td>@yield('genero')</td>
							 </tr>
							 <tr>
							 	<td>Distribuidora(s):</td>
							 	<td>@yield('distribuidora')</td>
							 </tr>
							 <tr>
							 	<td>Modo de Juego:</td>
							 	<td>@yield('modo')</td>
							 </tr>
							 <tr>
							 	<td>Calificación:</td>
							 	<td>@yield('calificacion')	
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
				        <p class="text-descripcion">Descripcion</p>
				        @yield('descripcion')
			  		</div>
			  	</div>
		</div>
		<br>