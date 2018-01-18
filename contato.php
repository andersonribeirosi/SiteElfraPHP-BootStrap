
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Elfra Representações">
    <meta name="author" content="Anderson Ribeiro">
    <link rel="icon" href="adm/imagens/custom.ico">

    <title>Elfra Representações | Contato</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

<?php
        include_once("menu.php");
    ?>  

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <h2> <b>Elfra Representações Ltda.</b></h2>
    <h5> Fixo: (83) 3321-0250 - Celular: (83) 99976-5256 (Tim) </h5>
    <h5> WhatsApp: (83) 98845-9370 (Oi)</h5>
    <h5> Email: elfrarep@gmail.com </h5>
    <h5> Campina Grande - Paraíba - Brasil</h5>
    <br>

    <img style="width: 100px" src="imagens/contato.png">
    <h3><b>Contato</b></h3>

    <?php 
    if(isset($_POST['enviar']) && $_POST['nome'] != '' && $_POST['telefone'] != '' && $_POST['email'] != '' && $_POST['assunto'] != '' && $_POST['mensagem'] != ''):

      /*echo 'Todos os campos estão ok!';*/

    $to = 'andersonribeiro.sifacisa@gmail.com';  
    
    $contato = 'Contato pelo site';
   
    $Nome = $_POST['nome'];
    $Telefone = $_POST['telefone'];
    $Email = $_POST['email'];
    $Assunto = "Contato pelo site - ";
    $Assunto .= $_POST['assunto'];
    $Mensagem = $_POST['mensagem'];
    $header = "From: $Email Reply-to: $Email";
    /*$header .= "Content-Type: Contato pelo site; charset= utf-8";*/
    $message =  "Nome: $Nome"."\n";  
    $message .= "Telefone: $Telefone"."\n";  
    $message .= "Email: $Email"."\n"; 
    $message .= "Mensagem: $Mensagem"."\n";
    mail($to, $Assunto, $message, $header);
    echo '<p style="color:blue;" align="center"><b> Mensagem enviada com sucesso!</b></p>';
    
    else:
      echo '<p style="color:red;" align="center"><b> Preencha todos os campos</b></p>';

    /*echo "$Nome enviou um email seu telefone é $Telefone, com assunto $Assunto, com descricao $Mensagem";*/
 
      /*var_dump($_POST['nome']);*/
      /*echo "<p style='color:red;'> <b>Sua mensagem não foi enviada!</b></p>";*/
    endif;
    ?>

     <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <form class="form-horizontal" method="post" action="contato.php">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Preencher nome completo" required/>
      

    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email" required/>
    </div>
  </div>

     <div class="form-group">
    <label class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" placeholder="Telefone" required/>
    </div>
  </div>

     <div class="form-group">
    <label class="col-sm-2 control-label">Assunto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="assunto" placeholder="Assunto da mensagem" required/>
    </div>
  </div>

     <div class="form-group">
    <label class="col-sm-2 control-label">Mensagem</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="5" name="mensagem" required/></textarea>    

    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
      <b><input style="font: 0.9em Trebuchet MS; width: 25%;" class="btn btn-lg btn-primary btn btn-success" type="submit" name="enviar" value="Enviar"/></b>

    </div>
  </div>

</form>

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