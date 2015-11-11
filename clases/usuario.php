<?php
	
    class usuario
	{
		public $idUsuario;
		public $nombre;
        public $contrasenia;
        public $mail; 
		
        public function GetId()
        {
            return $this->idUsuario;
        }

         public function GetNombre()
        {
            return $this->nombre;
        }

        public function GetContrasenia()
        {
            return $this->contrasenia;
        }

        public function GetMail()
        {
            return $this->mail;
        }


        public static function TraerTodosLosUsuarios()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodosLosUsuarios()");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 
        }     

        public static function TraerUsuarioPorId($valor)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuarioPorId('$valor')");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 
        }    

        public static function TraerUsuarioPorNombre($nom)
        {
            require_once("AccesoDatos.php");
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuarioPorNombre('$nom')");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 
        }

        public static function validarUsuario($nom, $contra)
        {
            $resultado = usuario::TraerUsuarioPorNombre($nom); 
            //var_dump($resultado[0]);
            if($resultado[0]->nombre == $nom && $resultado[0]->contrasenia == $contra)
                return true;
            else
                return false;
        }   

        public static function TraerUsuarioPorMail($mail)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuarioPorMail('$mail')");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 
        }

        public function InsertarUsuario()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarUsuario(:paramNombre,:paramContrasenia,:paramMail)");
            $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
            $consulta->bindValue(':paramContrasenia', $this->contrasenia, PDO::PARAM_STR);
            $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_INT);              
            $consulta->execute();       
            return $objetoAccesoDato->RetornarUltimoIdInsertado();
        }
 

        public function BorrarUsuario()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarUsuario(:paramId)");
            $consulta->bindValue(':paramId', $this->idUsuario, PDO::PARAM_INT);                     
            $consulta->execute();
            return $consulta->rowCount();
        }
        
    
        public function ModificarUsuario()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarUsuario(:paramId,:paramNombre,:paramContrasenia,:paramMail)");
            $consulta->bindValue(':paramId', $this->idUsuario, PDO::PARAM_INT);
            $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
            $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_STR);    
            $consulta->bindValue(':paramContrasenia', $this->contraseña, PDO::PARAM_STR);
            return $consulta->execute();
        }

        public function ModificarContra()
        {
           $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
           $consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarContra(:paramContrasenia,:paramMail)");       
           $consulta->bindValue(':paramContrasenia', $this->contrasenia, PDO::PARAM_STR);    
           $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_STR);
           return $consulta->execute();
        }

        public function GuardarUsuario()
        {
            if($this->idUsuario>0)
               $this->ModificarUsuario();
            else           
               $this->InsertarUsuario();
        }  
 }

        
     
 
?>






        