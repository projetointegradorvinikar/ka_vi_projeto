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
					<a href="index.php"><li>Cadastro</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
					<a href="index.php"><li>Sair</li></a>
				</ul>
			</nav>
			<section>
			<h1>Cadastro de Documentos</h1>
			<hr><br><br>
			
			<form method="post" action="processa.php">
					
				Código do Documento<br>
				<input type="number" name="codigo" class="campo"  autocomplete="on" required autofocus><br>
				Data de Criação<br>
				<input type="date" name="data" class="campo" required><br>
				Tipo de Documento<br>
				<input type="text" name="tipo" class="campo" maxlength="30" required><br>
				Assunto<br>
				<input type="text" name="assunto" class="campo" maxlength="100" required>
				<br><br>
				<input type="submit" value="Salvar" class="btn">
				<input type="reset" value="Limpar" class="btn">
					
				</form>
			</section>
		</div>
	</body>
</html>