<?php 
session_start();
	include_once("../clases/usuario.php");
	include_once("../clases/AccesoDatos.php");
	include_once("../clases/encriptacion.php");



    $recordar= $_POST['recordarme'];
    $usuario= $_POST['usuario'];
    $contraseniaEncriptada= encriptacion::Encriptar($_POST['clave']);
    //var_dump($_POST);

if(usuario::validarUsuario($usuario,$contraseniaEncriptada))
{

	$_SESSION['usuarioActual']=$_POST['usuario'];
	if ($recordar) 
	{
		setcookie('registrado', $usuario, time()+36000,'/');
    }
    else
    {
    	setcookie('registrado', $usuario, time()-36000,'/');
    }
    echo "1";
}
else
{
	echo "0";
}

?>