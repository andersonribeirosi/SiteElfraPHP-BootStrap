
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Elfra Representações">
    <meta name="author" content="Anderson Ribeiro">
    <link rel="icon" href="adm/imagens/favicon.ico">

    <title>Elfra Representações | Contato</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
	
	<!-- Custom styles for this template 
    <link href="css/carousel.css" rel="stylesheet">-->
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Elfra Representações</a>
        </div>
        
		<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>            
            <li class="dropdown">
              <a href="produto.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="produto.php">Linha Industrial</a></li>
                <li><a href="produto.php">Linha Doméstica</a></li>
                <li><a href="produto.php">Linha Agrícola</a></li>
              </ul>
            </li>
			<li><a href="empresa.php">Empresa</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="login.php">Area Restrita</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
		<h3> <b>Elfra Representações Ltda.</b></h3>
    <h5> Telefone Fixo: (83) 3321-0250 - Celular: (83) 98845-9370 (Oi) </h5>
    <h5> Campina Grande - Paraíba - Brasil</h5>
    <br>


    <h2>Contato</h2>

    
    




      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

 
<form class="form-horizontal" method="post" action="mailto:[b]elfrarep@gmail.com[/b]" type="text/plain">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome Completo*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nome" placeholder="Preencher nome completo" required>
    </div>
  </div>


    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
    </div>
  </div>

     <div class="form-group">
    <label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTelefone" name="telefone" placeholder="Telefone" required>
    </div>
  </div>

     <div class="form-group">
    <label for="inputAssunto" class="col-sm-2 control-label">Assunto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAssunto" name="assunto" placeholder="Assunto da mensagem" required>
    </div>
  </div>

     <div class="form-group">
    <label for="inputMensagem" class="col-sm-2 control-label">Mensagem</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="3" name="mensagem"></textarea>    

    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Enviar</button>
      <input type="hidden" name="emaildest" value="elfrarep@gmail.com">
      <input type="hidden" name="redirecionar" value="http://elfrarep.16mb.com">
    </div>
  </div>
</form>



</table>

<form action="formail.php" method="POST">

<font face="Arial Narrow">

<input type="hidden" name="emaildest" value="elfrarep@gmail.com"></font>

<font face="Arial Narrow">

<input type="hidden" name="redirecionar" value="http://elfrarep.16mb.com">

</font>


      <hr class="featurette-divider">

      


      <footer>
        <p>&copy; Anderson Ribeiro 2017</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
