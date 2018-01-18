<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Elfra Representações">
    <meta name="author" content="Anderson Ribeiro">

    <title>Elfra Representações</title>

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



<header>
 <?php
        include_once("menu.php");
    ?> 
	   <br>
     <div class="container marketing">

<h2 align="center"><b><strong>Principais Clientes</strong></b></h2><br> 

<br>
  
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Cliente</th>
      <th>Cidade/Estado</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <th scope="row">1</th>
     <td>Almeida Com. Dist. de Mats. Elétricos Ltda.</td>
     <td>Esperança - PB</td>                
  </tr>  
    <tr>
    <th scope="row">2</th>
    <td>Shopping da Eletricidade</td>
    <td>Campina Grande - PB</td>                
 </tr>         
    <tr>
    <th scope="row">3</th>
    <td>Dantas Distribuidora</td>
    <td>Esperança - PB</td> 
    </tr>
    <tr>
  <th scope="row">4</th>
     <td>Eletropolo Eletricidade Ltda.</td>
     <td>Campina Grande - PB</td>                
  </tr>  
    <tr>
    <th scope="row">5</th>
    <td>Prener Com. de Mats. Elétricos Ltda.</td>
    <td>João Pessoa - PB</td>                
 </tr>         
    <tr>
    <th scope="row">6</th>
    <td>Nordife Materiais Elétricos</td>
    <td>João Pessoa - PB</td> 
    </tr>
    <tr>
  <th scope="row">7</th>
     <td>Maria Lindomar Costa Cavalcanti</td>
     <td>Campina Grande - PB</td>                
  </tr>  
    <tr>
    <th scope="row">8</th>
    <td>Mega Eletricidade</td>
    <td>Campina Grande - PB</td>                
 </tr>         
    <tr>
    <th scope="row">9</th>
    <td>Energy</td>
    <td>Esperança - PB</td> 
    </tr>
    <tr>
    <th scope="row">10</th>
    <td>Atacadão dos Parafusos </td>
    <td>Campina Grande - PB</td> 
    </tr>
  </tbody>
</table>