<?php
	/**
	* 
	*/
	class extrae_datos{
		
		private $tabla;
		private $elemto_tabla;
		private $elemento_buscado;
		private $conexion;

		public function __construct($table,$elemen,$elemen_t,$conect){
			$this->tabla = $table;
			$this->elemento_buscado = $elemen;
			$this->elemento_tabla = $elemen_t;
			$this->conexion = $conect;
		}

		public function obtener_datos(){
			$datos = [];
			$i=0;
			$query = "select * from $this->tabla where $this->elemento_tabla = $this->elemento_buscado";
			$result = mysqli_query($this->conexion, $query);
			if (!$result){
		    	echo "Fallo al ejecutar la consulta: (" . $this->conexion->errno . ") " . $this->conexion->error;
			}else{
				while ($fila = $result->fetch_assoc()) {	
					$datos[$i]=$fila["nombre"];
					$i++;
				}
				return $datos;
			}
		}
	}
?>