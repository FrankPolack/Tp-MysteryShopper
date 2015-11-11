<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title>Mystery Shopper</title>

<!--BOTONERA COOL-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">


<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- media queries css -->
<link href="css/media-queries.css" rel="stylesheet" type="text/css">

<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<script type="text/javascript" src="js/funcionesAJAX.js"></script>
<script type="text/javascript" src="js/funcionesLOGIN.js"></script>
<script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
<script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>
<script type="text/javascript" src="js/funcionesMapa.js"></script>
</head>

<body onload="Mostrar('MostrarInicio')">

<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">Mystery Shopper</a></h1><br><br>
			<h2 id="site-description">  Esta pagina permitira a usted hacer una descripcion del producto en cuestion 
			</h2>
		</hgroup>

		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a style="cursor:pointer" onclick="Mostrar('MostrarInicio')">Inicio</a> </li>
				<li><a style="cursor:pointer" onclick="Mostrar('MostrarGrilla')">Mostrar Grillas</a> </li>				
			</ul>
			<!-- /#main-nav --> 
		</nav>

		<!--<form id="searchform">
			<input type="search" id="s" placeholder="Buscar" >
			
		</form>-->

	</header>
	<!-- /#header -->
	
	<div id="content">

		
	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">

		<section class="widget">
			<h4 class="widgettitle">Inicia Sesion</h4>
			<ul>
				<input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario" value="<?php
				if (isset($_COOKIE["registro"])) 
				{
					echo $_COOKIE["registrado"];
				}?>">
				<input type="password" id="contraseña" placeholder="contraseña" name="contraseña"><br>
				<label>
				    <li id="lblRecordar"><input type="checkbox" id="recordar">Recordame</li>
				    <h4 id="usuarioLogueado"></h4>
			    </label>

				<input type="submit" class="MiBotonUTN" id="Login" onclick="login()" value="Entrar">
				<input type="button" class="MiBotonUTN" id="Logout" onclick="logout()" value="Salir">
				<input type="button" class="MiBotonUTN" id="RegistrarUsuario" onclick="Mostrar('RegistrarUsuario')" value="Registrarse">
 				<center>
 				<li><a style="cursor:pointer" onclick="Mostrar('CambiarContraseña')">¿Has olvidado tu contraseña?</a></li>
				</center>
         	</ul>
		</section>

        <section class="widget">
			<h4 class="widgettitle">Registrar Nueva Sucursal</h4>
			<ul>
				<input type="button" class="MiBotonUTN" id="RegistrarSucursal" onclick="Mostrar('RegistrarSucursal')" value="Ingresar Sucursal">
			</ul>
		</section>
		<!-- /.widget -->

		<!--<section class="widget clearfix">
			<h4 class="widgettitle">Panel </h4>
			
		</section>-->
		<!-- /.widget -->
			<figure class="post-image"> 
				<center>
				<img  src="imagenes/logos_empresas_adheridas.png">
				<img  src="imagenes/logos.jpg">
				<img  src="imagenes/chatarra.jpg">
				<img  src="imagenes/descarga.jpg">
				<img  src="imagenes/imagess.jpg">
			    </center>
			</figure>	

-->			<!-- Se determina y escribe la localizacion -->


		
	</aside>
	<!-- /#sidebar -->

	
    <!-- /#footer --> 
	
		<!--<footer id="footer">
	
		<p>templete by <a href="http://www.octavio.com.ar">Octavio Villegas</a></p> 
		<p>designe by <a>Frank Polack</a></p>
	    
	    </footer>-->
    

</div>
<!-- /#pagewrap -->

</body>
</html>