<?php
	require ("db.php");
	if(isset($_GET['msg'])){
			$msg = $_GET['msg'];

			switch($msg){
				case 1:
				?>
					<div class="message">
						<div class="alert alert-success">
							<a href="index.php" class="close" data-dismiss="alert">&times</a>
							Usuário cadastrado com sucesso.
						</div>
					</div>
				<?php
				break;
			}
		}
				?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php
        include_once("barra.php");
    ?>   

	<div class="container" align="center">
		<form action="cadusu.php" method="post" class="form-cadusu">
			<br>
			<h2 class="form-login-heading">Cadastro de Usuário</h2>
			<br>
			<label for="inputNome">Nome</label>
			<input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome" required autofocus>
			<label for="inputEmail">E-mail</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
			<label for="inputPassword">Senha</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
			<br>



			<a href="login.php"><button type="submit" class="btn btn-lg btn-primary btn-block btn-success">Cadastrar</button></a>
		</form>
	</div>


	<form action="login.php" method="post" class="form-login">
			<h4 align="center" class="form-login-heading">ou</h4><br>
		
		<a href="login.php"><button type="submit" class="btn btn-lg btn-primary btn-block">Fazer Login</button></a>

		</form>

</body>
</html>