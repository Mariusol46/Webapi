<?php
    require_once("D://xampp/htdocs/WEB-APIREST/VIEW/Head/head.php");
    require_once("D://xampp/htdocs/WEB-APIREST/CONTROLLER/usernameController.php");
    $obj = new usernameController();
    $user = $obj->mostrar($_GET['id']);
?>
  <form action="actualizar.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombres" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("D://xampp/htdocs/WEB-APIREST/VIEW/Head/footer.php");
?>