<?php

	require_once("clases/sucursal.php");
	require_once("clases/AccesoDatos.php");
	require_once("clases/encriptacion.php");
	require_once("clases/usuario.php");
	
$quehago = $_POST['queHago'];

switch ($quehago) {
	case 'borrarUsuario':
		$user = new usuario();
		$user->idUsuario = $_POST['id'];
		$resultado = $user->BorrarUsuario();
		echo $resultado;
		break;

	case 'GuardarUsuario':
		$contraEncriptada = encriptacion::Encriptar($_POST['contra']);
		$user = new usuario();
		$user->idUsuario = $_POST['id'];
		$user->nombre = $_POST['nom'];		
		$user->contrasenia = $contraEncriptada; 
		$user->mail = $_POST['mail'];		
		$cantidad = $user->GuardarUsuario();
		echo true;
		break;

	case 'GuardarSucursal':
		
		$su = new sucursal();
		$su->idSucursal = $_POST['id'];
		$su->nombre = $_POST['nom'];		
		$su->provincia = $_POST['pro']; 
		$su->direccion = $_POST['dire'];	
		$su->localidad = $_POST['loca'];	
		$cantidad = $su->GuardarSucursal();
		echo true;
		break;

    case 'RegistrarSucursal':
			include("partes/registrarSucursal.php");
			break;

	case 'MostrarGrilla':
			include("partes/grilla.php");
			break;

	case 'RegistrarUsuario':
			include("partes/registrarUsuario.php");
			break;
			
    case 'VerMapa':
			include("partes/formMapa.php");
			break;

	case 'MostrarInicio':
			include("partes/inicio.php");	
			break;

	case 'CambiarContraseña':
			include("partes/cambiarContra.php");
			break;

	case 'TraerUsuario':
			$user = usuario::TraerUsuarioPorId($_POST['id']);		
			echo json_encode($user[0]);
		break;

	case 'TraerSucursal':
			$su = sucursal::TraerSucursalPorId($_POST['id']);		
			echo json_encode($su[0]);
		break;

	case 'TraerUsuarioPorMail':
			$user = usuario::TraerUsuarioPorMail($_POST['mail']);
			if($_POST['contra']== $_POST['contra2'])
			{
			$contraEncriptada = encriptacion::Encriptar($_POST['contra']);;	
			$user[0]->contrasenia = $contraEncriptada;	
			$user[0]->ModificarContra();
			echo true;
			}
			else
				echo false;
		break;
			
	default:
		# code...
		break;
}

?>