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
		
		$this->host = "mysql.hostinger.com.br";
		$this->user = "u931999602_user1";
		$this->password = "amazonas1";
		$this->database = "u931999602_cnp";
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