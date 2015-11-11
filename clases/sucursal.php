<?php
	class sucursal
	{
		public $idSucursal;
		public $nombre;
        public $provincia;
        public $direccion;
        public $localidad;
		
        public function GetNombre()
        {
            return $this->nombre;
        }

        public function GetIdSucursal()
        {
            return $this->idSucursal;
        }

        public function GetProvincia()
        {
            return $this->provincia;
        }

        public function GetDireccion()
        {
            return $this->direccion;
        }

        public function GetLocalidad()
        {
            return $this->localidad;
        }

        public static function TraerTodasLasSucursales()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodasLasSucursales()");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "sucursal"); 
        }  

        public static function TraerSucursalPorId($valor)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerSucursalPorId('$valor')");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "sucursal"); 
        }    

        public static function TraerSucursalPorNombre($nom)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerSucursalPorNombre('$nom')");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS, "sucursal"); 
        }
        
        public function InsertarSucursal()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarSucursal(:paramNombre,:paramPro,:paramDire,:paramLoca)");
            $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
            $consulta->bindValue(':paramPro', $this->provincia, PDO::PARAM_STR);
            $consulta->bindValue(':paramDire', $this->direccion, PDO::PARAM_STR);
            $consulta->bindValue(':paramLoca', $this->localidad, PDO::PARAM_STR);
            $consulta->execute();       
            return $objetoAccesoDato->RetornarUltimoIdInsertado();
        }


        public function ModificarSucursal()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarSucursal(:paramId,:paramNombre,:paramPro,:paramDire,:paramLoca)");
            $consulta->bindValue(':paramId', $this->idSucursal, PDO::PARAM_INT);
            $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
            $consulta->bindValue(':paramPro', $this->provincia, PDO::PARAM_STR);    
            $consulta->bindValue(':paramDire', $this->direccion, PDO::PARAM_STR);
            $consulta->bindValue(':paramLoca', $this->localidad, PDO::PARAM_STR);
            return $consulta->execute();
        }

        public function BorrarSucursal()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarSucursal(:paramId)");
            $consulta->bindValue(':paramId', $this->idSucursal, PDO::PARAM_INT);                     
            $consulta->execute();
            return $consulta->rowCount();
        }

        public function GuardarSucursal()
        {
            if($this->idSucursal>0)
               $this->ModificarSucursal();
            else           
               $this->InsertarSucursal();
        }  
	}

?>