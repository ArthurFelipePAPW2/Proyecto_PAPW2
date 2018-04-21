<div class="container resena comentario">
			<div class="row">
				<div class="col-md-2">
					<center>
						@yield('img-user')					
						<p class="name-user-comentario">@yield('nombre-user')</p><br>
						<div class="btn-group btn-util">
				        	<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-up"></span></button>
							<button type="button" class="btn"><span class="glyphicon glyphicon-thumbs-down"></span></button>
						</div>
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">@yield('fecha')</p>
					<p class="likes-comentario">[Likes: @yield('likes') Dislikes: @yield('dislikes')]</p>
					<div class="row">
						<h3 class="titulo-comentario">@yield('titulo-comentario') @yield('user-rate')
	  					</h3>

						<p class="text-comentario">
							@yield('texto-comentario')
						</p>
					</div>
				</div>
			</div>
		</div><br>