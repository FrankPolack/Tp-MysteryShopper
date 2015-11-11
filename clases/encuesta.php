<?php
	class encuesta
	{
		public $idEncuesta;
		public $nombrePro;
        public $tipoPro;
        public $calidad_del_producto;
        public $idSucursal;
		public $idUsuario;

        public function GetIdEncuesta()
        {
            return $this->idEncuesta;
        }

         public function GetNombrePro()
        {
            return $this->nombrePro;
        }

        public function GetTipoPro()
        {
            return $this->tipoPro;
        }

        public function GetCalidad()
        {
            return $this->calidad_del_producto;
        }

        public function GetIdSucursal()
        {
            return $this->idSucursal;
        }

        public function GetIdUsuario()
        {
            return $this->idUsuario;
        }


     public static function TraerTodasLasEncuestas()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodasLasEncuestas()");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "encuesta"); 

        }     

     public static function TraerEncuestaPorId($valor)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerEncuestaPorId('$valor')");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "encuesta"); 

        }    

	}

?>