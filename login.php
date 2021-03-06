<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		switch($msg){
			case 1:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="login.php" class="close" data-dismiss="alert">&times</a>
						Email ou Senha errados tente outra vez.
					</div>
				</div>
			<?php
			break;
			case 2:
			?>
				<div class="message">
					<div class="alert alert-danger">
						<a href="login.php" class="close" data-dismiss="alert">&times</a>
						Você não tem permissão para acessar esta página.
					</div>
				</div>
			<?php
			break;
			case 3:
			?>
				<div class="message">
					<div class="alert alert-success">
						<a href="login.php" class="close" data-dismiss="alert">&times</a>
						Logout realizado com sucesso.
					</div>
				</div>
			<?php
			break;
		}
	}
 ?>
 
<?php
        include_once("barra.php");
    ?>   

	<div class="container">
		<form action="autenticar.php" method="post" class="form-login">
			<h2 class="form-login-heading">Entre com o usuário</h2>
			<label for="inputEmail" class="sr-only">E-mail</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
			<div class="checkbox">
				<label><input type="checkbox"value="esqueci">Esqueci a senha</label>
			</div>
			<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>

		</form>
		<form action="form_cadusu.php" method="post" class="form-login">
			<h4 align="center" class="form-login-heading">ou</h4>
		<br>
		<p align="center"> Não possui cadastro? Cadastre-se agora. </p>
		<a href="form_cadusu.php"><button type="submit" class="btn btn-lg btn-primary btn-block btn btn-success">Cadastre-se</button></a>

		</form>


</body>
</html>