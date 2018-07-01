<?php
			
		include_once("conexao.php");
	
		$filtrocodigo= isset($_GET['filtrocodigo'])?$_GET['filtrocodigo']:"";
		
		$filtrotipo= isset($_GET['filtrotipo'])?$_GET['filtrotipo']:"";
		
		$filtroassunto= isset($_GET['filtroassunto'])?$_GET['filtroassunto']:"";
		
		$sql = "select * from documentos 
		where codigo like '%$filtrocodigo%' and tipo like '%$filtrotipo%' and assunto LIKE '%$filtroassunto%' ";

		
		$consulta = mysqli_query($conexao,$sql);
		$registros = mysqli_num_rows($consulta);
	
			
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
					<a href="index.php"><li>Sair</li></a>
				</ul>
			</nav>
			<section>
			<h1>Consulta de Documentos</h1>
			<hr><br>
			<h3>Filtrar por</h3>
			<form method="get" action="">
					
				Código: <input type="text" name="filtrocodigo" class="campo">
				<br>Tipo: <input type="text" name="filtrotipo" class="campo">
				<br>Assunto: <input type="text" name="filtroassunto" class="campo">
								
				<br><input type="submit" value="Pesquisar" class="btn">
			</form>
			
			<?php
			print "<br>";					
			print "$registros registro(s) encontrado(s).";
			print "<br><br>";
			
			while($exibirRegistros = mysqli_fetch_array($consulta)){
			$codigo = $exibirRegistros[0];
			$data = $exibirRegistros[1];
			$tipo = $exibirRegistros[2];
			$assunto = $exibirRegistros[3];
			
			print "<article>";
			
			print "<strong>Código:</strong> $codigo<br>";
			print "<strong>Data:</strong> $data<br>";
			print "<strong>Tipo de Documento:</strong> $tipo<br>";
			print "<strong>Assunto:</strong> $assunto<br><br>";
			
			
			print "</article>";
			}
			
			mysqli_close($conexao);
			?>
			</section>
		</div>
	</body>
</html>