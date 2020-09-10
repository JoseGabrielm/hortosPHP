<?php
include('include/header.php');
include('class/ClassCrud.php');
?>
<?php


if (isset($_GET['coluna'])) {
  $col = $_GET['coluna'];
} else {
  $col = 'id';
}
if (isset($_GET['ordem'])) {
  $ordem = $_GET['ordem'];
} else {
  $ordem = '';
}


?>

<div class="col-9 m-auto">
  <label class="mt-4" for="">Filtrar por</label>
  <div class="row mb-4">
    <div class="col-2">
      <form class="form-group" name="filtro" id="filtroOrdem" action="Pesquisa.php" method="GET">
        <select class="form-control-lg" id="coluna" name="coluna">
          <option value="id">--Coluna </option>
          <option value="id">Código</option>
          <option value="nm_horto">Nome</option>
          <option value="sg_estado_federativo">Estado</option>
          <option value="cd_casca">Cód. da casca</option>
          <option value="vl_mad_po">Preço</option>
          <option value="dt_ano_ref">Ano</option>
        </select>
    </div>
    <div class="col-2">
      <select class="form-control-lg" id="ordem" name="ordem">
        <option value="">--Ordem</option>
        <option value="ASC">Crescente</option>
        <option value="DESC">Decrescente</option>
      </select>
    </div>
    <div class="col-3">
      <a href="">
        <button class="btn btn-success mt-2 mr-2">Aplicar</button>
      </a>

    </div>
    <div class="col-6">
      <input class="form-control mr-sm-2 form-control-lg" type="search" value="<?php echo $barraPesq; ?>" id="search" name="search"></input>
    </div>
    <button class="btn btn-dark mr-sm-2" type="submit">PESQUISAR</button>

  </div>
  </form>


  <table class="table table-bordered table-dark table-hover">
    <thead class="lg">
      <tr>
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

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB(
      "*",
      "cst_mad_terc",
      "ORDER BY $col $ordem ",
      array()
    );

    while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {

    ?>

      <tr>
        <td class="align-middle"><b><?php echo $Fetch['id']; ?></b></td>
        <td class="align-middle"><?php echo $Fetch['nm_horto']; ?></td>
        <td class="align-middle"><?php echo $Fetch['sg_estado_federativo']; ?></td>
        <td class="align-middle"><?php echo $Fetch['cd_casca']; ?></td>
        <td class="align-middle"><?php echo $Fetch['vl_mad_po']; ?></td>
        <td class="align-middle"><?php echo $Fetch['vl_mad_neg']; ?></td>
        <td class="align-middle"><?php echo $Fetch['dt_ano_ref']; ?></td>
        <td>
          <a href="<?php echo "cadastro.php?id={$Fetch['id_serv']}"; ?>">
            <button class="btn btn-outline-success">Editar</button>
          </a>
          <a class="Apagar" href="<?php echo "controllers/ControllerApagar.php?id={$Fetch['id_serv']}"; ?>">
            <button class="btn btn-outline-danger ">Apagar</button>
          </a>
        </td>
      </tr>




    <?php

    };

    ?>

  </table>
</div>


</body>



<?php include('include/footer.php') ?>