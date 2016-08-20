<?php

$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');

if(isset($_GET["emailpassado"])){
	$login=$_GET["emailpassado"];
	
		$sql = "select * from usuario where email = '".$login."'";
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
	<header id="cabecalho">
		<div class="container">		
			<a href="index.html">
				<img class="pull-left" src="images/logo.jpg">
			</a>
				<div class="etiqueta">
					<label class="lbl"><?php echo $_GET["emailpassado"]; ?></label>	<label class="lbl">|</label>	<label class="lbl"><a href="index.php">SAIR</a></label>
				</div>
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