<?php
include('../class/ClassCrud.php');


$Crud=new ClassCrud();
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);


$Crud->deleteDB(
        "CST_MAD_TERC_BACKUP",
        "ID_HORTO=?",
        array(

            $id
        )

        );
        
        header("Location: ../index.php");
?>