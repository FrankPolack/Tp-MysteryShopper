<?php 
session_start();
if(isset($_SESSION['usuarioActual']))
{
	require_once("clases/usuario.php");
	require_once("clases/sucursal.php");
	require_once("clases/AccesoDatos.php");
	$usuario = usuario::TraerTodosLosUsuarios();


 ?>
 <h3>Usuarios</h3>
 <div class="miTabla">
	<table>
		
			<tr>
				<td width='5%'>  Nombre     </td>
				<td width='5%'>  Contraseña  </td>
				<td width='5%'>  Mail  </td>
				<td width='5%'>  Modificar     </td>
				<td >  Borrar  </td>
			</tr> 


		<?php 
           
foreach ($usuario as $user){
		
		echo " 	<tr>
					<td>$user->nombre</td>
					<td>$user->contrasenia</td>
					<td>$user->mail</td>
				    <td><a id='modificar' class='MiBotonUTNFRA' onclick=modificarUsuario($user->idUsuario)> Modificar </a></td>
                    <td><a id='borrar' class='MiBotonUTNFRA' onclick='borrarUsuario($user->idUsuario)'> Borrar </a></td> 
				</tr>";

	}
		 ?>	
</table>
</div>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>

	 <?php 

if(isset($_SESSION['usuarioActual']))
{
	require_once("clases/usuario.php");
	require_once("clases/sucursal.php");
	require_once("clases/AccesoDatos.php");
	$sucursal = sucursal::TraerTodasLasSucursales();


 ?>
 <h3>Sucursales</h3>
 <div class="miTabla">
	<table>
		
			<tr>
				<td width='5%'>  Nombre     </td>
				<td width='5%'>  Provincia  </td>
				<td width='5%'>  Direccion  </td>
				<td width='5%'>  Localidad     </td>
				<td width='5%'>  Modificar     </td>
				<td width='5%'>  Ver Mapa     </td>
				<td width='5%'>  Encuesta     </td>
			</tr> 


		<?php 
           
foreach ($sucursal as $su){
		$l = '"'.$su->provincia. '"' . ',"' .$su->direccion. '"' . ',"' .$su->localidad. '"' . ',"' .$su->idSucursal. '"';
		
		echo " 	<tr>
					<td>$su->nombre</td>
					<td>$su->provincia</td>
					<td>$su->direccion</td>
					<td>$su->localidad</td>
				    <td><a id='modificar' class='MiBotonUTNFRA' onclick=modificarSucursal($su->idSucursal)> Modificar </a></td>
                    <td><a id='Mapa' class='MiBotonUTNFRA' onclick= 'VerEnMapa($l)'> Mapa </a></td>
                    <td><a id='encuesta' class='MiBotonUTNFRA' onclick='Encuesta'> Encuesta </a></td> 
				</tr>";

	}
		 ?>	
</table>
</div>

<?php 	}else	{
		echo "";
	}

	 ?>