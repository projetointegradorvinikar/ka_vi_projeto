<?php

include_once("conexao.php");

$codigo = $_POST ['codigo'];
$data = $_POST ['data'];
$tipo = $_POST ['tipo'];
$assunto = $_POST ['assunto'];

$sql = "insert into documentos (codigo, data, tipo, assunto) values ('$codigo','$data','$tipo','$assunto')";

$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

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
					<a href="documentos.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
				</ul>
			</nav>
			<section>
			<h1>Confirmação de Cadastro</h1>
			<hr><br><br>
			<?php
			if($linhas == 1){
				print "Cadastro efetuado com sucesso!";
			}
			else
				{
				print "Cadastro não efetuado.</br>Verifique se o código do documento está correto.";
			}
			?>
			</section>
		</div>
	</body>
</html>