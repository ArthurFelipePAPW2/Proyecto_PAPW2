<div class="container resena comentar">
			<div class="row">
				<div class="col-md-2">
					<center>@yield('own-img')<p class="name-user-comentario">@yield('own-user')</p><br>
						
					</center>
				</div>
				<div class="col-md-10">
					<p class="fecha-comentario">@yield('today')</p>
					<div class="row"><form>
						@yield('own-title')
						
						<br>
						@yield('own-review')
						
						<br>
						@yield('own-rate')
						
						<input type="submit" value="Comentar"></form>
					</div>
				</div>
			</div>
		</div><br>