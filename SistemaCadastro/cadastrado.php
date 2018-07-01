<?php 

include_once("conexao.php");

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];


$sql = "insert into login (usuario, senha) values ('$usuario','$senha)";

$registrar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SIGEDOC - Sistema de Gerenciamento de Documentos</title>
		<link rel="stylesheet" href="_PROJETOS/SistemaCadastro/css/estilo.css">
	</head>
	<body>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Login</li></a>
					<a href="cadastro.php"><li>Voltar</li></a>
				</ul>
			</nav>
			<section>
			<h1>Confirmação de cadastro</h1>
			<hr><br>
								
			<?php
			if($linhas ==1){
				print "Usuário cadastrado com sucesso!";
				"<script language='javascript' type='text/javascript'>;window.location.href='login.html'</script>";
			}
			else
				{
				print "Não foi possível cadastrar este usuário.";
				"<script language='javascript' type='text/javascript'>;window.location.href='cadastro.html'</script>";
			}
			
			mysqli_close($conexao);
			
			?>
			
			</section>
		</div>
	</body>
</html>

