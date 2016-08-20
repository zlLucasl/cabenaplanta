<?php
include("DAL/banco.php");
include("BLL/cadastroBLL.php");

$bd = new Banco();

if(isset($_POST['cadastrar'])){
	if($_POST['nome'] !="" && $_POST['email'] !="" && $_POST['senha'] !=""&& $_POST['senha2'] !=""  && $_POST["sexo"] !="" && $_POST["nascimento"] !="" && $_POST['numero'] !="" && $_POST['senha'] == $_POST['senha2']){
		
		
	$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');
		
		$nome = $_POST["nome"];
		$sexo = $_POST["sexo"];
		$nascimento = $_POST["nascimento"];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
	
							$sql = "SELECT (email) FROM usuario WHERE email = '".$email."'";
							$dados = mysqli_query($conexao, $sql);
							$qtdelinhas = mysqli_num_rows($dados);
						
							$linha = mysqli_fetch_assoc($dados);
			
							
			if($linha['email'] == $email){
				header('Location:cadastro-usuario.php?msg2="invalido"');
			}
			else{
	
						$cadastro = new Cadastro("",$_POST['nome'],$_POST['email'],$_POST['senha'],"");
						$resultado = $cadastro->insere($bd);
		
				$sql = "SELECT (id) FROM usuario WHERE email = '".$email."'";
				$dados = mysqli_query($conexao, $sql);
				$linha = mysqli_fetch_assoc($dados);

				$sql = "insert into cliente(id, usuario_id, nome, sexo, nascimento) values(null, '".$linha['id']."', '".$nome."', '".$sexo."', '".$nascimento."')";
				$dados = mysqli_query($conexao, $sql);

				$sql = "insert into telefone(id, numero, usuario_id) values(null, '".$numero."', '".$linha['id']."')";
				$dados = mysqli_query($conexao, $sql);
			}
			
	}
	else{
		header('Location:cadastro-usuario.php?msg="erro"');
	}
}
?>


<?php

$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');

if(isset($_POST["entrar"])){
	$login=$_POST["email"];
	$pwd=$_POST["senha"];
	
		$sql = "select * from usuario where email = '".$login."' and senha = '".$pwd."'";
		$dados = mysqli_query($conexao, $sql);
		$linha = mysqli_fetch_assoc($dados);
		
		if($login!="" and $pwd!="" and $linha['tipo'] == 2){
			header('Location:pedreiro.php');
		}
			elseif($login!="" and $pwd!="" and $linha['tipo'] == 3){
				header('Location:encontrar-prestador.php');
			}
				elseif($login!="" and $pwd!="" and $linha['tipo'] == 1){
					
				}
					elseif($login!="" and $pwd!="" and $linha['tipo'] == 4){
						header('Location:adm.php');
						
					}
		
}

?>



<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<title>Cabe Na Planta</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">	
	
		<script type="text/javascript" async="" src="./mask_files/ga.js"></script><script src="./mask_files/jquery-1.5.2.min.js"></script><style type="text/css"></style>
		<script src="./mask_files/jquery.maskedinput-1.3.min.js"></script>
	
	
	
</head>
<body>
	<header id="cabecalho">
		<div class="container">		
			<a href="index.php">
				<img class="pull-left" src="images/logo.jpg">
			</a>
			<ul class="pull-right list-inline"> 
				<li><a class='abrir-login' href="#"><i class="material-icons">lock_open</i> FAZER LOGIN</a></li>
			</ul>
			<form class="form-login" method="post" action="">
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="senha" placeholder="Senha" />
				</div>
				<input type="submit" class="btn btn-primary" name="entrar" value="Entrar" />
			</form>
		</div>
	</header>
	<div class="container">
		<div class="titulo_cont">		
			<h1>Confirme seu cadastro</h1>	
		</div>
		<form method="post" action="">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" placeholder="Email" value="nome@email.com" onfocus="if (this.value=='nome@email.com') this.value='';" onblur="if (this.value=='') this.value='nome@email.com'">
					</div>
					<div class="form-group">
						<label>Senha:</label>
						<input type="password" name="senha" class="form-control">
					</div>
					<input type="submit" value="Entra" name="entrar" class="btn btn-primary pull-right">
				</div>
			</div>
		</form>
	</div>
	
	
	<script>
		jQuery(function($){
		       $("#telefone").mask("(99) 99999-9999");
		});
	</script>
	
	
	<div class="rodape">
		<div class="container">	
			<br><br>	
			Contatos
			<br><br>	
			<br><br>	
			<br><br>	
			<br><br>	

		</div>
	<div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".abrir-login").click(function(){
				$(".form-login").toggleClass("ativo");
			});
		});
	</script>
</body>
</html>