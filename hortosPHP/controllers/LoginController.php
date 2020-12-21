<?php

include("../include/variaveis.php");
include("{$_SERVER['DOCUMENT_ROOT']}/class/ClassConexao.php");

if (!empty($_POST) AND (empty($_POST['user']) OR (empty($_POST['senha'])))){



header("location: ../login.php");
 

}







?>


