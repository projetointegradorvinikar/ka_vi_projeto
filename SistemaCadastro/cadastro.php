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
				</ul>
			</nav>
			<section>
			<h1>Tela de Cadastro</h1>
			<hr><br><br>
			
			<form method="POST" action="cadastrado.php">
				<label>Usuário:</label><input type="text" name="usuario" class="campo"  maxlength="30" required autofocus><br>
				<label>Senha:</label><input type="password" name="senha" class="campo"  maxlength="30" required><br><br>
				<input type="submit" value="Registrar" name="registrar" class="btn">
				<input type="reset" value="Limpar" class="btn">
				
			</form>
			</section>
		</div>
	</body>
</html>
