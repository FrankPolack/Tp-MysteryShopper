<article class="post clearfix">

			<header>
				<h2>Registrarse</h2>
			</header>	
				<form onsubmit="GuardarSucursal();return false">
				<div class="miTabla">
						<table>
							
								<tr>
									<td width='25%'>  NombreSucursal    </td>
									<td width='25%'>  Provincia  </td>
									<td width='25%'>  Direccion  </td>
									<td width='25%'>  Localidad  </td>
								</tr> 
								<tr>
									<td><input type="text" minlength="4" title="Se necesita el nombre de la sucursal" id="nombreSucursal" name="nombre"required autofocus="" pattern="[a-zA-Z]*+" placeholder="Nombre"></td></td>

									<td> <input type="text"  minlength="4"  id="provincia" title="Ingrese la provincia"   placeholder="Provincia" pattern="[a-zA-Z0-9]*+" required="" autofocus=""></td>

									<td> <input type="text"  minlength="4"  id="direccion" title="Ingrese la direccion"   placeholder="Direccion" pattern="[a-zA-Z0-9]*+" required="" autofocus=""></td>

									<td> <input type="text"  minlength="4"  id="localidad" title="Ingrese la localidad"  placeholder="Localidad" pattern="[a-zA-Z0-9]*+" required="" autofocus=""></td>

									<input type="hidden"  id="idSucursal">						
								</tr>							
						</table>								
					</div>	
					
									<input type="submit"  class= "MiBotonUTNInvitado" id="guardarSucursal" value="Ingresar Nueva Sucursal" >
			</form>		

	</article>