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
				<a href="encontrar-prestador.php">
					<img class="img-circle center-block img-responsive img-perfil" src="images/perfil.jpg">
					<h1 class="nome-perfil"><?php echo $linha['nome_usuario'];?></h1>
				</a>
				<ul class="menu-vertical"> 
					<li><a href="encontrar-prestador.php">Encontrar Prestador</a></li>
					<li><a href="#">Encontrar Estabelecimentos</a></li>
					<li><a href="#">orçamentos Solicitados</a></li>
					<li><a href="#">Perfil</a></li>
					<li><a href="index.php">Sair</a></li>
				</ul>
			</header>
			<div class="col-md-9 col-md-offset-3">
				<form class="form-inline row filtro-box" method="post">
					<div class="container-fluid">
						<h2>Filtros</h2>
						<div class="form-group">
							<label>Cidade</label>
							<select class="form-control" name="cidad">
							<option value="" selected="">Selecione</option>
							<?php
								$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');
	
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
					$conexao = mysqli_connect('mysql.hostinger.com.br', 'u931999602_user1', 'amazonas1', 'u931999602_cnp');
	
					if(isset($_POST["filtrar"])){
						if($_POST["especi"] != ""){
						
							$sql = "select * from pedreiro where especialidade LIke '%".$_POST["especi"]."%'";
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
						
							$sql = "select * from pedreiro where cidade LIke '%".$_POST["cidad"]."%'";
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
						
							$sql = "select * from pedreiro where cidade LIke '%".$_POST["cidad"]."%' and especialidade LIke '%".$_POST["especi"]."%'";
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