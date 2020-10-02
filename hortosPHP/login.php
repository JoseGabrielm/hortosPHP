<?php
include('include/header.php');
include('class/ClassCrud.php');
?>

<div class="container col-10">

<div class="jumbotron col-4">


<div class="form-group text-left col-10">

    <label for="">Email</label>
    <input type="email" class="form-control" id="CD_HORTO" name="CD_HORTO" placeholder="" >

    <label class="mt-4" for="">Senha</label>
    <input type="password" class="form-control" id="NM_HORTO" name="NM_HORTO" placeholder="" >

   
    <button type="submit" class="btn btn-primary mt-4 mb-2" value="">Login</button>
    
    <br>

    <a href="index.php">entrar sem login</a>
  
    


</div>

</div>





</div>




<?php include('include/footer.php') ?>