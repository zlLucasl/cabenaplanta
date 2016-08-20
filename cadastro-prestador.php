<?php

	$conexao = mysqli_connect('localhost', 'root', '', 'cabe_planta');

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
if(isset($_GET["msg2"])){
	print "<script type=\"text/javascript\">alert('O E-mail fornecido já esta cadastrado!');</script>";
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
			<h1>Cadastro de prestador</h1>	
		</div>
		<form method="post" action="conf_pedreiro.php">
			<div class="row">
				<div class="col-md-4">
					<label>Alterar perfil:</label>
					<input type="file" name="foto">
				</div>
				<div class="col-md-4">
					<div class="form-group">
					<div class="form-group">
						<label>Nome completo</label>
						<input type="text" name="nome" class="form-control" onkeypress="return Onlychars(event)">
					</div>
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
					<div class="form-group">
						<label>Sexo:</label>
						<select class="form-control" name="sexo">
							<option value="" selected="">Selecione</option>
							<option value="m">Masculino</option>
							<option value="f">Feminino</option>			  
						</select>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" value="nome@email.com"placeholder="Email"  onfocus="if (this.value=='nome@email.com') this.value='';" onblur="if (this.value=='') this.value='nome@email.com'">
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="numeric" name="telefone" class="form-control" id="telefone" placeholder="(31)99999-9999" onfocus="if (this.value=='(31)99999-9999') this.value='';" onblur="if (this.value=='') this.value='(31)99999-9999'">
					</div>
					<div class="form-group">
						<label>Especialidade</label>
						<select class="form-control" name="especialidade">
							<option value="" selected="">Selecione</option>
							<option value="Pedreiro">Pedreiro</option>
							<option value="Pintor">Pintor</option>
							<option value="Eletricista">Eletricista</option>
							<option value="Marceneiro">Marceneiro</option> 
							<option value="Bombeiro">Bombeiro hidráulico</option>
					  	</select>
					</div>
				</div>
				<div class="col-md-4">
				
		<div class="form-group">
			<label>Logradouro</label>
			<input type="text" id="nome" name="logradouro" class="form-control" value="">
                        
		</div>
		<div class="form-group">
			<label>Número</label>
			<input type="text" id="snome" name="numero" class="form-control" value="">
		</div>
		<div class="form-group">
			<label>Complemento</label>
			<input type="text" id="snome" name="complemento" class="form-control" value="">
		</div>
		<div class="form-group">
			<label>Bairro</label>
			<input type="text" id="snome" name="bairro" class="form-control" value="">
		</div>
		<div class="form-group">
			<label>Cidade</label>
			<input type="text" id="snome" name="cidade" class="form-control" value="">
		</div>
		<div class="form-group">
			<label>Estado</label>
                        <select name="uf" id="estado" class="form-control">
                    <option value="ac">AC</option>
					<option value="al">AL</option>
					<option value="ap">AP</option>
					<option value="am">AM</option>
					<option value="ba">BA</option>
					<option value="ce">CE</option>
					<option value="df">DF</option>
					<option value="es">ES</option>
					<option value="go">GO</option>
					<option value="ma">MA</option>
					<option value="mt">MT</option>
					<option value="ms">MS</option>
					<option value="mg" selected="">MG</option>
					<option value="pa">PA</option>
					<option value="pb">PB</option>
					<option value="pr">PR</option>
					<option value="pe">PE</option>
					<option value="pi">PI</option>
					<option value="rj">RJ</option>
					<option value="rn">RN</option>
					<option value="rs">RS</option>
					<option value="ro">RO</option>
					<option value="rr">RR</option>
					<option value="sc">SC</option>
					<option value="sp">SP</option>
					<option value="se">SE</option>
					<option value="to">TO</option>
			</select>
                        
		</div>
		<div class="form-group">
			<label>CEP</label>
                <input type="text" id="cep" name="cep" class="form-control" placeholder="99999-999" onfocus="if (this.value=='99999-999') this.value='';" onblur="if (this.value=='') this.value='99999-999'" /><br>
			
		</div>
				
				</div>
			</div>
			<input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary pull-right">
		</form>
	</div>
	
	
	<script>
		jQuery(function($){
		       $("#telefone").mask("(99) 99999-999?9");
		       $("#cep").mask("99999-999");
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