<?php
include('../class/ClassCrud.php');


$Crud=new ClassCrud();
$Id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);


$Crud->deleteDB(
        "cst_mad_terc",
        "id_serv=?",
        array(

            $Id
        )

        );
        
        header("Location: ../index.php");
?>