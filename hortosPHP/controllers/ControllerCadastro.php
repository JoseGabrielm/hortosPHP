<?php

include("../include/variaveis.php");
include("../class/ClassCrud.php");

$Crud=new ClassCrud();

if($acao=='cadastrar'){
$Crud->insertDB(
        "Inventario.CST_MAD_TERC_BACKUP",
        "?,?,?,?,?,?,?,?",
        array(
            $sg_estado_federativo,
            $cd_horto,
            $nm_horto,
            $dt_ano_ref,
            $cd_casca,
            $vl_mad_po,
            $vl_mad_neg,
            $id_horto
        )
        
        

);

header("Location: ../index.php");
 

}else {
    $Crud->updateDB(
        "CST_MAD_TERC_BACKUP",
        "NM_HORTO=? , DT_ANO_REF=? , CD_HORTO=? , CD_CASCA=? , VL_MAD_PO=? , VL_MAD_NEG=? , SG_ESTADO_FEDERATIVO=? ",
        "ID_HORTO=?",
        array(
            
            $nm_horto,
            $dt_ano_ref,
            $cd_horto,
            $cd_casca,
            $vl_mad_po,
            $vl_mad_neg,
            $sg_estado_federativo,
            $id_horto
        )



        );




}
header("Location: ../index.php");

?>