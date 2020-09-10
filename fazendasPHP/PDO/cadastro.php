<?php include('include/header.php') ?>


<?php
include('class/ClassCrud.php');

    if(isset($_GET['id'])){
          $acao="editar";

          $Crud=new ClassCrud();
          $BFetch=$Crud->selectDB("*","cst_mad_terc","where id_serv=?", array($_GET['id']));
          $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
          $id_serv=$Fetch['id_serv'];
          $id=$Fetch['id'];
          $nm_horto=$Fetch['nm_horto'];
          $dt_ano_ref=$Fetch['dt_ano_ref'];
          $cd_casca=$Fetch['cd_casca'];
          $sg_estado_federativo=$Fetch['sg_estado_federativo'];
          $vl_mad_neg=$Fetch['vl_mad_neg'];
          $vl_mad_po=$Fetch['vl_mad_po'];
    }else{
          $acao="cadastrar";
          $id_serv="";
          $id="";
          $nm_horto="";
          $dt_ano_ref="";
          $cd_casca="";
          $sg_estado_federativo="";
          $vl_mad_neg="";
          $vl_mad_po="";
    }

?>

<body>
<header class="text-center mt-4">
   <h1><?php echo $acao; ?></h1>
    <hr> 
<div class="container mt-4">
  <form name="FormCadastro" id="FormCadastro" method="POST" action="Controllers/ControllerCadastro.php" >
  <div class="form-group text-left">

    <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
    <input type="hidden" id="id_serv" name="id_serv" value="<?php echo $id_serv; ?>">

    <label for="">Código</label>
    <input type="number" class="form-control" id="id" name="id" placeholder="" value="<?php echo $id; ?>">

    <label class="mt-4" for="">Nome</label>
    <input type="text" class="form-control" id="nm_horto" name="nm_horto" placeholder="" value="<?php echo $nm_horto; ?>">

    <label class="mt-4" for="">Ano de Referência</label>
    <input type="number" class="form-control" id="dt_ano_ref" name="dt_ano_ref" placeholder="" value="<?php echo $dt_ano_ref; ?>">
  
    <label class="mt-4"for="">CD CASCA</label>
    <input type="text" class="form-control" id="cd_casca" name="cd_casca" placeholder="" value="<?php echo $cd_casca; ?>">

    <label class="mt-4" for="">ESTADO</label>
    <select class="form-control" id="sg_estado_federativo" name="sg_estado_federativo" >
      <option value="<?php echo $sg_estado_federativo; ?>"><?php echo $sg_estado_federativo; ?></option>
      <option>SP</option>
      <option>MG</option>
    </select>

    <label class="mt-4"for="">VL MAD NEG</label>
    <input type="text" class="form-control" id="vl_mad_neg" name="vl_mad_neg" placeholder="" value="<?php echo $vl_mad_neg; ?>">

    <label class="mt-4"for="">VL MAD PO</label>
    <input type="text" class="form-control" id="vl_mad_po" name="vl_mad_po" placeholder="" value="<?php echo $vl_mad_po; ?>">

    <button type="submit" class="btn btn-primary mt-4 mb-2" value=""><?php echo $acao; ?></button>

  
  
  </div>
  </form>
</div>





</body>
<?php include('include/footer.php') ?>


