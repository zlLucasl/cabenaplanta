<?php

session_start();

if(!isset($_SESSION['usuario'])){
	header("Location: index.php");
}
else{
	$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');
	
	
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
	
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="css/small.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1250px)" href="css/estilos.css"/>
	
	<script>
    function slidetoggle() {
      var slider = document.getElementById("nav-slide");
      slider.style.height = window.innerHeight - 60 + "px";
      if(slider.style.left == "0px") {
        slider.style.left = "-600px";
      }
      else {
        slider.style.left = "0px";
      }
    }
  </script>
</head>
<body>


<div class="cabeca">
		<a>
			<img src="images/logo.jpg" href="index.php">
		</a>
	</div>


<nav id="nav-btn" onclick="slidetoggle()">
  <div></div>
  <div></div>
  <div></div>
</nav>

<section id="nav-slide">
			<div>
				<a href="adm.php">
					<img class="img-circle center-block img-responsive img-perfil" src="images/perfil.jpg">
					<h1 class="nome-perfil2"><?php echo $linha['nome_usuario'];?></h1>
				</a>
				<ul class="menu-vertical2">
					<li><a href="#">Notificações de Serviço</a></li>
					<li><a href="">Perfil</a></li>
					<li><a href="index.php">Sair</a></li>
				</ul>
			</div>
</section>
	
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