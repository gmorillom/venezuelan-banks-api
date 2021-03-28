<?php
//Conexion a base de datos PostgreSQL usando metodos nativos de PHP para 
//consultas con PostgreSQL 
abstract class ModelConnection {
	private static $host = "ec2-54-164-22-242.compute-1.amazonaws.com";
	private static $user = "ottfmisxwsfvqk";
	private static $password = "787a59fbdca7671699970f967bc7ff32be6a3ed2e09e1d01f5b06f37cf101e9e";
	private static $database = "d84lvi7t6ooaja";
	private $connection; 
	protected $sql;
	protected $rows = array();

	private function connection(){
		$this->connection = pg_connect(
			"host=$host dbname=$database user=$user password=$password"
		);
	}

	private function disconnection(){
		pg_close($this->connection);
	}

	protected function one_result(){
		self::connection();
		$catch = pg_query($this->connection,$this->sql);
		self::disconnection();
		return $catch;
	}

	protected function multi_results(){
		self::connection();


		
		$tmp = pg_query($this->connection,$this->sql);
		while( $this->rows[] = pg_fetch_assoc($tmp) );
		pg_free_result($tmp);
		self::disconnection();
		array_pop($this->rows);
	}
}

?>

<?php  
	/*
		<?php  
	abstract class ModelConnection {
	private static $host = "localhost";
	private static $user = "root";
	private static $password = "";
	private static $database = "test";
	private $connection; 
	protected $sql;
	protected $rows = array();

	private function connection(){
		$this->connection = new mysqli(self::$host, self::$user, self::$password, self::$database);
	}

	private function disconnection(){
		$this->connection->close();
	}

	protected function one_result(){
		self::connection();
		$catch = $this->connection->query($this->sql);
		self::disconnection();
		return $catch;
	}

	protected function multi_results(){
		self::connection();
		$tmp = $this->connection->query($this->sql);
		while( $this->rows[] = $tmp->fetch_assoc() );
		$tmp->close();
		self::disconnection();
		array_pop($this->rows);
	}
}

?>
	*/
?>