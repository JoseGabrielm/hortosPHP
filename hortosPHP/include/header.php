<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f7e3fe586a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="include/style.css">
  <title>Hortos</title>
</head>


<body>
  <?php

  if (isset($_GET['search'])) {
    $barraPesq = $_GET['search'];
  } else {
    $barraPesq = '';
  }
  ?>

  <header class="text-center">
    <nav class="navbar navbar-dark bg-dark m-auto">
        <a class="navbar-brand " href="index.php">
          <h1>hortos</h1>
        </a>
      
<div class="form-inline">
        
          <a href="../ajuda.php"><img src="../include/img/question.svg" alt="" width="32" height="32" title="Ajuda" class="mr-sm-4"></a>
       

        <a href="cadastro.php">
          <button class="btn btn-outline-primary  mr-sm-2 ">CADASTRAR</button>
        </a>
</div>
      </nav>
    </div>
    </div>

  </header>
  <br>
  <br>