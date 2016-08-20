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
					<li><a href="encontrar-prestador.php">Encontrar Prestador</a></li>
					<li><a href="#">Encontrar Estabelecimentos</a></li>
					<li><a href="#">orçamentos Solicitados</a></li>
					<li><a href="#">Perfil</a></li>
					<li><a href="index.php">Sair</a></li>
				</ul>
			</div>
</section>
	

	
			<div class="col-md-9 col-md-offset-3">
				<form class="form-inline row filtro-box" method="post">
					<div class="container-fluid">
						<h2>Filtros</h2>
						<div class="form-group">
							<label>Cidade</label>
							<select class="form-control" name="cidad">
							<option value="" selected="">Selecione</option>
							<?php
								$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');
	
								$sql = "select distinct cidade from pedreiro order by cidade asc";
								$dados = mysqli_query($conexao, $sql);
								$qtdelinhas = mysqli_num_rows($dados);
					
								for($x = 0; $x < $qtdelinhas; $x++){
									$linha = mysqli_fetch_assoc($dados);
									echo "<option value=".$linha['cidade'].">".$linha['cidade']."</option>";
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label>Especialidade</label>
							<select class="form-control" name="especi">
							<option value="" selected="">Selecione</option>
							<option value="Pedreiro">Pedreiro</option>
							<option value="Pintor">Pintor</option>
							<option value="Eletricista">Eletricista</option>
							<option value="Marceneiro">Marceneiro</option> 
							<option value="Bombeiro">Bombeiro hidráulico</option>
							</select>
						</div>
						<button type="submit" name="filtrar" class="btn btn-primary">Filtrar</button>
					</div>
				</form>
				
				
				<div class="lista row">
				<?php
					$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');
	
					if(isset($_POST["filtrar"])){
						if($_POST["especi"] != ""){
						
							$sql = "SELECT nome_usuario, especialidade FROM pedreiro JOIN usuario on usuario.id = pedreiro.usuario_id WHERE especialidade LIKE '%".$_POST["especi"]."%' ORDER BY nome_usuario";
							$dados = mysqli_query($conexao, $sql);
							$qtdelinhas = mysqli_num_rows($dados);
							
							for($x = 0; $x < $qtdelinhas; $x++){
								$linha = mysqli_fetch_assoc($dados);
							
								echo "<div class='item-lista col-md-12'>";
								echo "<img src='images/perfil.jpg' class='pull-left'>";
								echo "<p><strong>Nome:</strong><a href='#'>".$linha['nome_usuario']."</a></p>";
								echo "<p><strong>Especialidade:</strong>".$linha['especialidade']."</p>";
								echo "</div>";
							
							}
						
						}
						elseif($_POST["cidad"] != ""){
						
							$sql = "SELECT nome_usuario, especialidade FROM pedreiro JOIN usuario on usuario.id = pedreiro.usuario_id WHERE cidade LIKE '%".$_POST["cidad"]."%' ORDER BY nome_usuario";
							$dados = mysqli_query($conexao, $sql);
							$qtdelinhas = mysqli_num_rows($dados);
							
							for($x = 0; $x < $qtdelinhas; $x++){
								$linha = mysqli_fetch_assoc($dados);
							
								echo "<div class='item-lista col-md-12'>";
								echo "<img src='images/perfil.jpg' class='pull-left'>";
								echo "<p><strong>Nome:</strong><a href='#'>".$linha['nome_usuario']."</a></p>";
								echo "<p><strong>Especialidade:</strong>".$linha['especialidade']."</p>";
								echo "</div>";
							
							}
						
						}
						elseif($_POST["especi"] != "" && $_POST["cidad"] != ""){
						
							$sql = "SELECT nome_usuario, especialidade FROM pedreiro JOIN usuario on usuario.id = pedreiro.usuario_id WHERE especialidade LIKE '%".$_POST["especi"]." and cidade LIKE '%".$_POST["cidad"]."%' ORDER BY nome_usuario";
							$dados = mysqli_query($conexao, $sql);
							$qtdelinhas = mysqli_num_rows($dados);
							
							for($x = 0; $x < $qtdelinhas; $x++){
								$linha = mysqli_fetch_assoc($dados);
							
								echo "<div class='item-lista col-md-12'>";
								echo "<img src='images/perfil.jpg' class='pull-left'>";
								echo "<p><strong>Nome:</strong><a href='#'>".$linha['nome_usuario']."</a></p>";
								echo "<p><strong>Especialidade:</strong>".$linha['especialidade']."</p>";
								echo "</div>";
							
							}
						
						}
					}	
				?>
				
				
				
				
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