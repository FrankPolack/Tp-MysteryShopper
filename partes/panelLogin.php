<section class="widget">
			<h3 class="widgettitle">Ingresar</h3>
			<ul>
				<input type="text" id="nombreUsuario" name="nombreUsuario"  placeholder="Nombre de usuario" value="<?php
					if(isset($_SESSION['usuarioActual']))
					{
							 echo $_SESSION['usuarioActual']; 
					}?>">
				<input type="password" id="contraseña" placeholder="contraseña" name="contraseña"><br>
				<input type="button" class= "MiBotonUTN" id="Logout" onclick="logout()" value="Salir">
				<input type="button" class= "MiBotonUTN" id="Login" onclick="login()" value="Entrar">

			</ul>
</section>
		<!-- /.widget -->

		
		
						
