<?php
class Banco{
	public $conexao_bd;
	private $host;
	private $user;
	private $password;
	private $database;
	private $status;
	
	public function __construct(){
		$this->Conectar();
	}
	private function Conectar(){
		
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "cabe_planta";
		$this->conexao_bd = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		
		if(!$this->conexao_bd)
			$this->status = false;
			else
			$this->status = true;
	}
	public function statusconexao(){
		return $this->status;
	}
}
?>