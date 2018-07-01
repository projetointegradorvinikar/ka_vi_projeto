<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SIGEDOC - Sistema de Gerenciamento de Documentos</title>
		<link rel="stylesheet" href="_PROJETOS/SistemaCadastro/css/estilo.css">
	</head>
	<body>
		<div class="container">

			<section>
			<h1>Tela de Login</h1>
			<hr><br><br>
			
			<form method="POST" action="logar.php">
				<label>Usuário:</label><input type="text" name="usuario" id="usuario" required autofocus><br>
				<label>Senha:</label><input type="password" name="senha" id="senha" required><br><br>
				<input type="submit" value="Entrar" id="entrar" name="entrar">
				<a href="cadastro.php">Cadastre-se</a>
			</form>
			</section>
		</div>
	</body>
</html>