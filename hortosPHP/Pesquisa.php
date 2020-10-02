<?php
include("class/ClassCrud.php");
include("include/variaveis.php");
include('include/header.php') 
?>
<html>





<?php


if(isset($_GET['coluna'])){$col = $_GET['coluna'];}else{$col = 'CD_HORTO';}
if(isset($_GET['ordem'])){$ordem = $_GET['ordem'];}else{$ordem = 'ASC';}

?>

<div class="col-9 m-auto">
  <label class="mt-4 ml-1" for=""><b>Filtrar por:</b></label>
  <div class="row ml-1 mb-3">
    <div class="col-1.5">
      <form class="form-group" name="filtro" id="filtroOrdem" action="Pesquisa.php" method="GET">
        <select class="form-control" id="coluna" name="coluna">
          <option value="CD_HORTO">--Coluna </option>
          <option value="CD_HORTO">Código</option>
          <option value="NM_HORTO">Nome</option>
          <option value="SG_ESTADO_FEDERATIVO">Estado</option>
          <option value="CD_CASCA">Cód. da casca</option>
          <option value="VL_MAD_PO">VL MAD PO</option>
          <option value="VL_MAD_NEG">VL MAD NEG</option>
          <option value="DT_ANO_REF">Ano</option>
        </select>
    </div>
    <div class="col-1.5">
      <select class="form-control" id="ordem" name="ordem">
        <option value="">--Ordem</option>
        <option value="ASC">Crescente</option>
        <option value="DESC">Decrescente</option>
      </select>
    </div>
    <div class="col-2">
      <a href="">
        <button class="btn btn-success mr-2">Aplicar</button>
      </a>

    </div>
  </div>
  <div class="row mb-2">
    <div class="col-6">
      <input class="form-control mr-sm-2 form-control-lg" type="search" value="<?php echo $barraPesq; ?>" id="search" name="search"></input>
    </div>
    <button class="btn btn-dark mr-sm-2" type="submit">PESQUISAR</button>
  </div>
  </form>







  <table class="table table-bordered table-dark table-hover">
    <thead class="lg">
      <tr class="text-center">
        <th scope="col"><a class="column_sort" id="id" data-order="desc">Código </a></th>
        <th scope="col"><a class="column_sort" id="nm_horto" data-order="desc">Nome</a></th>
        <th scope="col"><a class="column_sort" id="sg_estado_federativo" data-order="desc">Estado</a></th>
        <th scope="col"><a class="column_sort" id="cd_casca" data-order="desc">Código da Casca</a></th>
        <th scope="col"><a class="column_sort" id="vl_mad_neg" data-order="desc">VL MAD NEG</a></th>
        <th scope="col"><a class="column_sort" id="vl_mad_po" data-order="desc">VL MAD PO</a></th>
        <th scope="col"><a class="column_sort" id="dt_ano_ref" data-order="desc">Ano de Referência</a></th>
        <th scope="col">...</th>
      </tr>
    </thead>






<?php
  
  $Crud=new ClassCrud();
  $BFetch=$Crud->searchDB(
    "t.*, t.rowid",
    "Inventario.CST_MAD_TERC_BACKUP t",
    "WHERE NM_HORTO LIKE UPPER('%$search%')",
    "ORDER BY $col $ordem",
    array(
     
     
    )
  );
?>

<?php


  while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){

  
?>



<tr>
      <td class="align-middle"><?php echo $Fetch['CD_HORTO']; ?></td>
      <td class="align-middle"><?php echo $Fetch['NM_HORTO']; ?></td>
      <td class="align-middle"><?php echo $Fetch['SG_ESTADO_FEDERATIVO']; ?></td>
      <td class="align-middle"><?php echo $Fetch['CD_CASCA']; ?></td>
      <td class="align-middle"><?php echo $Fetch['VL_MAD_PO']; ?></td>
      <td class="align-middle"><?php echo $Fetch['VL_MAD_NEG']; ?></td>
      <td class="align-middle"><?php echo $Fetch['DT_ANO_REF']; ?></td>
      <td>
          <a href="<?php echo "cadastro.php?id={$Fetch['ID']}"; ?>">
          <button class="btn btn-outline-success">Editar</button>
          </a>
          <a class="Apagar" href="<?php echo "controllers/ControllerApagar.php?id={$Fetch['ID']}"; ?>">
          <button class="btn btn-outline-danger ">Apagar</button>
          </a>
      </td>
    </tr>

</tr>
</div>






<?php
  }

?>

<?php include('include/footer.php') ?>