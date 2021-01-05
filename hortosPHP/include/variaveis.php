<?php


if(isset($_POST['acao'])){
    $acao=filter_input(INPUT_POST,'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
    $acao=filter_input(INPUT_GET,'acao', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $acao="";
}



if(isset($_POST['id'])){
    $id=filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $id="";

}

if(isset($_POST['DT_ANO_REF'])){
        $dt_ano_ref=filter_input(INPUT_POST,'DT_ANO_REF', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['DT_ANO_REF'])){
        $dt_ano_ref=filter_input(INPUT_GET,'DT_ANO_REF', FILTER_SANITIZE_SPECIAL_CHARS);
    
 }else {
    
    $dt_ano_ref="";

}

if(isset($_POST['NM_HORTO'])){
    $nm_horto=filter_input(INPUT_POST,'NM_HORTO' , FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['NM_HORTO'])){
    $nm_horto=filter_input(INPUT_GET,'NM_HORTO',FILTER_SANITIZE_SPECIAL_CHARS);
    
}else {

    $nm_horto="";
    
}

if(isset($_POST['CD_HORTO'])){
    $cd_horto=filter_input(INPUT_POST,'CD_HORTO', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['CD_HORTO'])){
    $cd_horto=filter_input(INPUT_GET,'CD_HORTO', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $cd_horto="";
    
}

if(isset($_POST['CD_CASCA'])){
    $cd_casca=filter_input(INPUT_POST,'CD_CASCA', FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['CD_CASCA'])){
    $cd_casca=filter_input(INPUT_GET,'CD_CASCA', FILTER_SANITIZE_SPECIAL_CHARS);
    
}else {

    $cd_casca="";
    
}

if(isset($_POST['SG_ESTADO_FEDERATIVO'])){
    $sg_estado_federativo=filter_input(INPUT_POST,'SG_ESTADO_FEDERATIVO', FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['SG_ESTADO_FEDERATIVO'])){
    $sg_estado_federativo=filter_input(INPUT_GET,'SG_ESTADO_FEDERATIVO', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $sg_estado_federativo="";
    
}

if(isset($_POST['VL_MAD_PO'])){
    $vl_mad_po=filter_input(INPUT_POST,'VL_MAD_PO', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['VL_MAD_PO'])){
    $vl_mad_po=filter_input(INPUT_GET,'VL_MAD_PO', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $vl_mad_po="";


}

if(isset($_POST['VL_MAD_NEG'])){
    $vl_mad_neg=filter_input(INPUT_POST,'VL_MAD_NEG', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['VL_MAD_NEG'])){
    $vl_mad_neg=filter_input(INPUT_GET,'VL_MAD_NEG', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $vl_mad_neg="";


}


if(isset($_POST['CONTRATO'])){
    $contrato=filter_input(INPUT_POST,'CONTRATO', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['CONTRATO'])){
    $contrato=filter_input(INPUT_GET,'CONTRATO', FILTER_SANITIZE_SPECIAL_CHARS) ;

}else {

    $contrato="";
}


if(isset($_POST['ID'])){
    $id=filter_input(INPUT_POST,'ID', FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['ID'])){
    $id=filter_input(INPUT_GET,'ID', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $id="";


}

if(isset($_POST['search'])){
    $search=filter_input(INPUT_POST,'search', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['search'])){
    $search=filter_input(INPUT_GET,'search', FILTER_SANITIZE_SPECIAL_CHARS) ;

}else {

    $search="";
}


?>