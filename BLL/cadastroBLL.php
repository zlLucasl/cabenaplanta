<?php
class Cadastro
{
	public $id;
	public $nome_usuario;
	public $email;
	public $senha;
	public $tipo;
	
	public $id_cliente;
	public $usuario_id;
	public $nome;
	public $sexo;
	public $nascimento;
	
	
	public function __construct($i="", $n="", $e="", $s="", $t="")
		{
			$this->id = $i;
			$this->nome_usuario = $n;
			$this->email = $e;
			$this->senha = $s;
		}
	
	public function insere($bd)
	{
		$sql = "INSERT INTO usuario(id,nome_usuario,email,senha,tipo) VALUES(null, '".$this->nome_usuario."', '".$this->email."', '".$this->senha."', 3)";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		return $resultado;
	}
	public function insere2($bd)
	{
		$sql = "INSERT INTO usuario(id,nome_usuario,email,senha,tipo) VALUES(null, '".$this->nome_usuario."', '".$this->email."', '".$this->senha."', 2)";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		return $resultado;
	}
	public function insere3($bd)
	{
		$sql = "INSERT INTO usuario(id,nome_usuario,email,senha,tipo) VALUES(null, '".$this->nome_usuario."', '".$this->email."', '".$this->senha."', 1)";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		return $resultado;
	}
	public function insere4($bd)
	{
		$sql = "INSERT INTO usuario(id,nome_usuario,email,senha,tipo) VALUES(null, '".$this->nome_usuario."', '".$this->email."', '".$this->senha."', 4)";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		return $resultado;
	}
	
	public function executaListaId($bd)
	{
		$sql = "SELECT (id) FROM usuario WHERE email = '".$this->email."'";
		$this->resource = mysqli_query($bd->conexao_bd,$sql);
		
		return $this->resource;
	}
	public function executaLista($bd)
	{
		$sql = "SELECT (email,senha) FROM usuario WHERE email = '".$this->email."'";
		$this->resource = mysqli_query($bd->conexao_bd,$sql);
		
		return $this->resource;
	}
	public function executaLista3($bd)
	{
		$sql = "SELECT (email,senha) FROM usuario WHERE email = '".$this->email."'";
		$this->resource = mysqli_query($bd->conexao_bd,$sql);
		
		return $this->resource;
	}
	
	public function listaDados()
	{
		$this->dados = mysqli_fetch_assoc($this->resource);
		
		return $this->dados;
	}
	
	
	
	
	
	
	
	
	public function excluir($bd,$codi)
	{
		$sql = "DELETE FROM aluno WHERE codigo ='$codi'";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		
		return($resultado);
	}
	
	public function preencher($bd,$codigo)
	{
		$sql = "SELECT * FROM aluno WHERE codigo = $codigo";
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		list($this->codigo,$this->nome,$this->matricula,$this->turma,$this->serie)=mysqli_fetch_row($resultado);
	}
	
	public function atualiza($bd)
	{
		$sql = "UPDATE aluno SET nome = '".$this->nome."', matricula = ".$this->matricula.", turno = '".$this->turma."', serie = ".$this->serie." WHERE codigo = ".$this->codigo;
		$resultado = mysqli_query($bd->conexao_bd,$sql);
		return $resultado;
	}
}
?>

