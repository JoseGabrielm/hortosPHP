<?php

include("../include/variaveis.php");
include("../class/ClassCrud.php");

$Crud=new ClassCrud();

if($acao=='cadastrar'){
$Crud->insertDB(
        "cst_mad_terc",
        "?,?,?,?,?,?,?,?",
        array(
            $sg_estado_federativo,
            $id,
            $nm_horto,
            $dt_ano_ref,
            $cd_casca,
            $vl_mad_po,
            $vl_mad_neg,
            $id_serv
        )
        
        

);

header("Location: ../index.php");
 

}else {
    $Crud->updateDB(
        "cst_mad_terc",
        "sg_estado_federativo=? , id=? , nm_horto=? , dt_ano_ref=? , cd_casca=? , vl_mad_po=? , vl_mad_neg=? ",
        "id_serv=?",
        array(
            $sg_estado_federativo,
            $id,
            $nm_horto,
            $dt_ano_ref,
            $cd_casca,
            $vl_mad_po,
            $vl_mad_neg,
            $id_serv
        )



        );




}
header("Location: ../index.php");

?>