<tr>
		<td class="titulo-solicitud">@yield('titulo')</td>	
		<td>@yield('descripcion')</td>
		<td>
			<center><p class="user-solicitud">@yield('user')</p>@yield('img')</center>
		</td>
		<td><center>
			<form>
				<label class="eliminar-check">
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
		</form></center>
	</td>
</tr>		