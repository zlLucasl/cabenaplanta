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
				<a href="adm.php">
					<img class="img-circle center-block img-responsive img-perfil" src="images/perfil.jpg">
					<h1 class="nome-perfil"><?php echo $linha['nome_usuario'];?></h1>
				</a>
				<ul class="menu-vertical"> 
					<li><a href="adm_cliente.php">Cadastrar Cliente</a></li>
					<li><a href="adm_prestador.php">Cadastrar Prestador</a></li>
					<li><a href="adm_loja.php">Cadastrar loja</a></li>
					<li><a href="#">Orçamentos Solicitados</a></li>
					<li><a href="adm_encontrar.php">Encontrar Prestadores</a></li>
					<li><a href="">Perfil</a></li>
					<li><a href="index.php">Sair</a></li>
				</ul>
			</header>
                	<form method="post" action="conf_pedreiro.php">
			<div class="row">
				<div class="col-md-4">
				<img src="cabe2.png" style="margin-left: 330px" height="620" width="1024">
					</div>
				</div>
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