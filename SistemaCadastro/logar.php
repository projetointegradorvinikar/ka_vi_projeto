<?php 
  include_once("conexao.php");

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha']; 
  $entrar = $_POST['entrar'];

  $sql = "SELECT * FROM login WHERE usuario='$usuario' and senha='$senha'";
   
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
			<h1>Confirmação de acesso</h1>
			<hr><br>
								
			<?php
			  if (isset($entrar)) {
             
     $consulta = mysqli_query($conexao, $sql) or die("Erro ao selecionar");
        if (mysqli_num_rows($consulta)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos. Tente novamente.'); window.location.href='index.php';</script>";
          die();
        }else{
          echo "Acesso realizado com sucesso!";       
        }
    }
			mysqli_close($conexao);
			?>
			
			</section>
		</div>
	</body>
</html>

