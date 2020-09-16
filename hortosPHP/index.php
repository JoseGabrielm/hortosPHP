<?php
include('include/header.php');
include('class/ClassCrud.php');
?>
<?php


if (isset($_GET['coluna'])) {
  $col = $_GET['coluna'];
} else {
  $col = 'CD_HORTO';
}
if (isset($_GET['ordem'])) {
  $ordem = $_GET['ordem'];
} else {
  $ordem = '';
}


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
        <th scope="col">Código </th>
        <th scope="col">Nome</th>
        <th scope="col">Estado</th>
        <th scope="col">Código da Casca</th>
        <th scope="col">VL MAD NEG</th>
        <th scope="col">VL MAD PO</th>
        <th scope="col">Ano de Referência</th>
        <th scope="col">...</th>
      </tr>
    </thead>

    <?php

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB(
      "t.*, t.rowid",
      "CST_MAD_TERC_BACKUP t",
      "ORDER BY $col $ordem ",
      array()
    );

    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {

    ?>

      <tr>
        <td class="align-middle"><b><?php echo $Fetch['CD_HORTO']; ?></b></td>
        <td class="align-middle"><?php echo $Fetch['NM_HORTO']; ?></td>
        <td class="align-middle"><?php echo $Fetch['SG_ESTADO_FEDERATIVO']; ?></td>
        <td class="align-middle"><?php echo $Fetch['CD_CASCA']; ?></td>
        <td class="align-middle"><?php echo $Fetch['VL_MAD_PO']; ?></td>
        <td class="align-middle"><?php echo $Fetch['VL_MAD_NEG']; ?></td>
        <td class="align-middle"><?php echo $Fetch['DT_ANO_REF']; ?></td>
        <td>
          <a href="<?php echo "cadastro.php?id={$Fetch['ID_HORTO']}"; ?>">
            <button class="btn btn-outline-success">Editar</button>
          </a>
          <a class="Apagar" href="<?php echo "controllers/ControllerApagar.php?id={$Fetch['ID_HORTO']}"; ?>">
            <button class="btn btn-outline-danger ">Apagar</button>
          </a>
        </td>
      </tr>




    <?php

    };

    ?>

  </table>
</div>





<?php include('include/footer.php') ?>