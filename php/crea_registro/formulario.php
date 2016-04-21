<?php
/*objeto que inserta un nuevo usuario en la base de datos,
por default lo inserta como no vaido (0 no valido, 1 valido).*/
class form{
	/*variables*/
	private $usuario;
	private $nombre;
	private $password;
	private $conect_db;
	private $tabla;
	/*constructor*/
	public function __construct($user, $pass, $conect, $name){
		$this->usuario = $user;
		$this->password = $pass;
		$this->conect_db = $conect;
		$this->nombre = $name;
		$this->tabla = "login";
	}
	/*metodos*/
	public function insertar_en_tabla(){
		$query = "insert into users (user, pass, nombre, user_valid) values ('$this->usuario', '".$this->password." ', '$this->nombre', 0)";
		$result = mysqli_query($this->conect_db, $query);

		if (!$result){
		    echo "Fallo al ejecutar la consulta: (" . $this->conect_db->errno . ") " . $this->conect_db->error;
		}else{
			//header('Location: ../../Sitio_Final.html'); /*colocar redireccionamiento correcto*/
		}
	}
}

?>