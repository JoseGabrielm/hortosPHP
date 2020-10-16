<?php
include('include/header.php');
include('class/ClassCrud.php');
?>

<div class="container col-10">

<div class="jumbotron col-4">


<div class="form-group text-left col-10">
<form action="../controllers/LoginController.php" method="POST">

    <label for="">Email</label>
    <input type="user" class="form-control" id="user" name="user" placeholder="" >

    <label class="mt-4" for="">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="" >

   
    <button type="submit" class="btn btn-primary mt-4 mb-2" value="">Login</button>
    
    <br>

    <a href="index.php">entrar sem login</a>
  
    
    </form>


</div>

</div>





</div>




<?php include('include/footer.php') ?>