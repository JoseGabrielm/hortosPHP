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

if(isset($_POST['dt_ano_ref'])){
        $dt_ano_ref=filter_input(INPUT_POST,'dt_ano_ref', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['dt_ano_ref'])){
        $dt_ano_ref=filter_input(INPUT_GET,'dt_ano_ref', FILTER_SANITIZE_SPECIAL_CHARS);
    
 }else {
    
    $dt_ano_ref="";

}

if(isset($_POST['nm_horto'])){
    $nm_horto=filter_input(INPUT_POST,'nm_horto', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nm_horto'])){
    $nm_horto=filter_input(INPUT_GET,'nm_horto', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $nm_horto="";
    
}

if(isset($_POST['cd_horto'])){
    $cd_horto=filter_input(INPUT_POST,'cd_horto', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cd_horto'])){
    $cd_horto=filter_input(INPUT_GET,'cd_horto', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $cd_horto="";
    
}

if(isset($_POST['cd_casca'])){
    $cd_casca=filter_input(INPUT_POST,'cd_casca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['cd_casca'])){
    $cd_casca=filter_input(INPUT_GET,'cd_casca', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $cd_casca="";
    
}

if(isset($_POST['sg_estado_federativo'])){
    $sg_estado_federativo=filter_input(INPUT_POST,'sg_estado_federativo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['sg_estado_federativo'])){
    $sg_estado_federativo=filter_input(INPUT_GET,'sg_estado_federativo', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $sg_estado_federativo="";
    
}

if(isset($_POST['vl_mad_po'])){
    $vl_mad_po=filter_input(INPUT_POST,'vl_mad_po', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['vl_mad_po'])){
    $vl_mad_po=filter_input(INPUT_GET,'vl_mad_po', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $vl_mad_po="";


}

if(isset($_POST['vl_mad_neg'])){
    $vl_mad_neg=filter_input(INPUT_POST,'vl_mad_neg', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['vl_mad_neg'])){
    $vl_mad_neg=filter_input(INPUT_GET,'vl_mad_neg', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $vl_mad_neg="";


}

if(isset($_POST['id_serv'])){
    $id_serv=filter_input(INPUT_POST,'id_serv', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id_serv'])){
    $id_serv=filter_input(INPUT_GET,'id_serv', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $id_serv=0;


}

if(isset($_POST['search'])){
    $search=filter_input(INPUT_POST,'search', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['search'])){
    $search=filter_input(INPUT_GET,'search', FILTER_SANITIZE_SPECIAL_CHARS);

}else {

    $search="";
}



?>