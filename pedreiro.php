<?php

session_start();

if(!isset($_SESSION['usuario'])){
	header("Location: index.php");
}
else{
	$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');
	
	
		$sql = "select * from usuario where email = '".$_SESSION['usuario']."'";
		$dados = mysqli_query($conexao, $sql);
		$linha = mysqli_fetch_assoc($dados);
		
		$sql2 = "select * from pedreiro where usuario_id = ".$linha['id'];
		$dados2 = mysqli_query($conexao, $sql2);
		$linha2 = mysqli_fetch_assoc($dados2);
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
	<div class="container-fluid">
		<div class="row">
			<header id="cabecalho" class="col-md-3 cabecalho-lateral">
				<a href="perfil.html">
					<img class="img-circle center-block img-responsive img-perfil" src="images/perfil.jpg">
					<h1 class="nome-perfil"><?php echo $linha['nome_usuario'];?></h1>
				</a>
				<ul class="menu-vertical"> 
					
					<li><a href="#">Notificações de Serviço</a></li>
					<li><a href="">Perfil</a></li>
					<li><a href="index.php">Sair</a></li>
				</ul>
			</header>
			<div class="col-md-9 col-md-offset-3">
				<form class="form-inline row filtro-box">
					<a style="font-size: 500%"><?php echo $linha2['especialidade'].": ".$linha['nome_usuario'];?></a>
				</form>
				</div>
			</div>
</div>			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			atualizaAltura();
			$(window).resize(function(){
				atualizaAltura();
			});
		});

		function atualizaAltura() {
			$("#cabecalho").css("height",$(window).height());
		}
	</script>
</body>
</html>