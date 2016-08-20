<?php
include("DAL/banco.php");
include("BLL/cadastroBLL.php");

$bd = new Banco();

if(isset($_POST['cadastrar'])){
	if($_POST['nome'] !="" && $_POST['email'] !="" && $_POST['senha'] !="" && $_POST['senha2'] !="" && $_POST['senha'] == $_POST['senha2']){
		
		$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');

			$email = $_POST['email'];
		
			$sql = "SELECT (email) FROM usuario WHERE email = '".$email."'";
							$dados = mysqli_query($conexao, $sql);
							$qtdelinhas = mysqli_num_rows($dados);
						
							$linha = mysqli_fetch_assoc($dados);
			
							
			if($linha['email'] == $email){
				print "<script type=\"text/javascript\">alert('O E-mail fornecido já esta cadastrado!');</script>";
			}
				else{
					$cadastro = new Cadastro("",$_POST['nome'],$_POST['email'],$_POST['senha'],"");
					$resultado = $cadastro->insere4($bd);
				}
}
	else{
		print "<script type=\"text/javascript\">alert('É obrigatorio preencher todos os campos!');</script>";
	}
}
?>

<?php

	$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');

if(isset($_POST["entrar"])){
	$login=$_POST["email"];
	$pwd=$_POST["senha"];
	
		$sql = "select * from usuario where email = '".$login."' and senha = '".$pwd."'";
		$dados = mysqli_query($conexao, $sql);
		$linha = mysqli_fetch_assoc($dados);
		
		if($login!="" and $pwd!="" and $linha['tipo'] == 2){
			header('Location:pedreiro.html');
		}
			elseif($login!="" and $pwd!="" and $linha['tipo'] == 3){
				header('Location:encontrar-prestador.html');
			}
				elseif($login!="" and $pwd!="" and $linha['tipo'] == 1){
					
				}
					elseif($login!="" and $pwd!="" and $linha['tipo'] == 4){
						header('Location:adm.html');
						
					}
		
}

if(isset($_GET["msg"])){
	print "<script type=\"text/javascript\">alert('É obrigatorio preencher todos os campos!');</script>";
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
	
	<script>

function Onlynumbers(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "97") && (tecla <= "122")){
		return false;
	}
}

function Onlychars(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}

</script>
	
</head>
<body>
	<header id="cabecalho">
		<div class="container">		
			<a href="index.php">
				<img class="pull-left" src="images/logo.jpg">
			</a>
				<div class="etiqueta">
					<label class="lbl"><a class=nome-perfil' href="super_adm.php">Administrador Master </a></label>	<label class="lbl"> | </label>	<label class="lbl"><a href="index.php"> SAIR</a></label>
				</div>
		</div>
	</header>
	<div class="container">
		<div class="titulo_cont">		
			<h1>Cadastro de Administrador</h1>	
		</div>
		<form method="post" action="super_adm.php">
			<div class="row">
				<div class="col-md-4">
				
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label>Nome completo</label>
						<input type="text" name="nome" class="form-control" onkeypress="return Onlychars(event)">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" value="nome@email.com" placeholder="Email" onfocus="if (this.value=='nome@email.com') this.value='';" onblur="if (this.value=='') this.value='nome@email.com'">
					</div>
					<div class="form-group">
						<label>Senha:</label>
						<input type="password" name="senha" class="form-control">
					</div>
					<div class="form-group">
						<label>Confirme a senha:</label>
						<input type="password" name="senha2" class="form-control">
					</div>
					
						<input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary pull-right" id="submit">
				</div>
				<div class="col-md-4">
					<div class="form-group">
					
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
		
		
		jQuery(function($){
		       $("#telefone").mask("(99) 99999-9999");
		});
	</script>
</body>
</html>