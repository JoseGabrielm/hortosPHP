<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="include/zepto.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <div class="m-auto ">
      <nav class="navbar navbar-dark bg-dark mb-4 ">
        <a class="navbar-brand mb-5" href="index.php">Hortos</a>
        <a href="cadastro.php">
          <button class="btn btn-outline-secondary">CADASTRAR</button>
        </a>

      </nav>
    </div>
    </div>

  </header>
  <br>
  <br>