
<?php
	//logof
	session_start();
	unset($_SESSION["usuario"]);
	session_destroy();
	
	
	$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');
	
	//ligin
	session_start();
	
	if(isset($_POST["entrar"]) && isset($_POST["email"]) && isset($_POST["senha"])){
	$login=$_POST["email"];
	$pwd=$_POST["senha"];
	
	
	$_SESSION["usuario"] = $login;
	
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
						elseif($login!="" and $pwd!="" and $linha['tipo'] == 5){
							header('Location:super_adm.php');
						
						}
							else{
								echo "<script type=\"text/javascript\">alert('Usuario ou senha incorreto!');</script>";;
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
</head>
<body>
	<header id="cabecalho">
		<div class="container">		
			<a href="index.html">
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
			<h1>Ainda não é cadastrado?</h1>	
			<h2>Cadastre-se já</h2>
		</div>
		<div class="col-md-3 col-md-offset-2">
			<div class="icon-home">
				<a href="cadastro-usuario.php">
					<img src="images/icon-usuario.jpg">
					<h3>Usuário comum</h3>
				</a>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-2">
			<div class="icon-home">
				<a href="cadastro-prestador.php">
					<img src="images/icon-prestador.jpg">
					<h3>Prestador <br/>de serviço</h3>
				</a>
			</div>
		</div>
	</div>
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