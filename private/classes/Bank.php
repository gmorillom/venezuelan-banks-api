<?php  
require_once("ModelConnection.php");

final class Bank extends ModelConnection {

	public function new( $bankData = array() ){
		foreach ($bankData as $key => $value) $$key = $value;
		
		$this->sql = "INSERT INTO bancos_api(id_privado,nombre,estado,codigo,privado,web,telefono,email) VALUES ('$id_privado','$nombre',$estado,'$codigo',$privado,'$web','$telefono','$email');";
		
		return $this->one_result();
	}

	public function find( $privateId = NULL ){
		$this->sql = ( $privateId !== NULL ) 
		? "SELECT id,nombre,estado,codigo,privado,web,telefono,email FROM bancos_api WHERE id_privado='$privateId';"
		: "SELECT id,nombre,estado,codigo,privado,web,telefono,email FROM bancos_api;";
		$this->multi_results();

		return $this->rows;
	}

	public function update( $bankData = array() ){
		foreach ($bankData as $key => $value) $$key = $value;

		$this->sql = "
		UPDATE bancos_api 
		SET email='$email', 
		codigo='$codigo',
		privado=$privado,
		estado=$estado,
		web='$web',
		telefono='$telefono',
		nombre='$nombre' 
		WHERE id_privado='$id_privado';";

		return $this->one_result();
	}

	public function delete( $privateId ){
		$this->sql = "DELETE FROM bancos_api WHERE id_privado='$privateId';";
		return $this->one_result();
	}

	public function lastId(){
		$this->sql = "SELECT MAX(id) AS id FROM bancos_api;";
		$this->multi_results();

		return $this->rows;
	}

	public function __destruct(){
		unset($this->connection);
	}
}
?>