<?php
  
  class encriptacion
  {
  	public static function Encriptar($string)
  	{
  		return $encriptado=md5($string);
  	}
  }

  //echo "81dc9bdb52d04dc20036dbd8313ed0 <br>";
  //echo encriptacion::Encriptar(1234);
?>