<article class="post clearfix">

			<header>
				<h2>Registrarse</h2>
			</header>	
				<form onsubmit="GuardarUsuario();return false">
				<div class="miTabla">
						<table>
							
								<tr>
									<td width='25%'>  Nombre de Usuario    </td>
									<td width='25%'>  Contraseña  </td>
									<td width='25%'>  Mail  </td>
												
								</tr> 
								<tr>
									<td><input type="text" minlength="4" title="Se necesita el nombre del usuario" id="nombreUsuario" name="nombre"required autofocus="" pattern="[a-zA-Z]*+" placeholder="Nombre"></td></td>

									<td> <input type="password"  minlength="4"  id="contraseña" title="Ingrese contraseña"  class="form-control" placeholder="Contraseña" pattern="[a-zA-Z0-9]*+" required="" autofocus=""></td>

									<td><input type="email"  id="mail" title="Ingrese un mail"  class="form-control" placeholder="E mail" required  autofocus=""></td>	

									<input type="hidden"  id="idUsuario">						
								</tr>							
						</table>								
					</div>	
					
									<input type="submit"  class= "MiBotonUTNInvitado" id="guardarUsuario" value="Registrarse" >
			</form>		

	</article>


	