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
				print "<script type=\"text/javascript\">alert('O E-mail fornecido já esta cadastrado!');</script>";
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
		print "<script type=\"text/javascript\">alert('É obrigatorio preencher todos os campos!');</script>";
	}
}
?>

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
                	
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="titulo_cont">		
			<h1>Cadastro de usuário</h1>	
		</div>
		<form method="post" action="adm_cliente.php">
			<div class="row">
				<div class="col-md-4">
				
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Nome completo</label>
						<input type="text" name="nome" class="form-control" onkeypress="return Onlychars(event)">
					</div>
					<div class="form-group">
						<label>Nome de usuário:</label>
						<input type="text" name="nome_usuario" class="form-control" onkeypress="return Onlychars(event)">
					</div>
					<div class="form-group">
						<label>Senha:</label>
						<input type="password" name="senha" class="form-control">
					</div>
					<div class="form-group">
						<label>Confirme a senha:</label>
						<input type="password" name="senha2" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" value="nome@email.com" placeholder="Email" onfocus="if (this.value=='nome@email.com') this.value='';" onblur="if (this.value=='') this.value='nome@email.com'">
					</div>
					<div class="form-group">
						<label>Sexo:</label>
						<select class="form-control" name="sexo">
							<option value="" selected="">Selecione</option>
							<option value="m">Masculino</option>
							<option value="f">Feminino</option>			  
						</select>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="numeric" name="numero" class="form-control" id="telefone" placeholder="(31)99999-9999" onfocus="if (this.value=='(31)99999-9999') this.value='';" onblur="if (this.value=='') this.value='(31)99999-9999'">
					</div>
					<div class="form-group">
						<label>Data de nascimento</label>
						<input type="date" name="nascimento" class="form-control">
					</div>
				</div>
			</div>
			<input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary pull-right" id="submit">
		</form>
	</div>
	
	
	<script>
		jQuery(function($){
		       $("#telefone").mask("(99) 99999-9999");
		});
	</script>
	
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