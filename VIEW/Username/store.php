<?php
    require_once("D://xampp/htdocs/WEB-APIREST/CONTROLLER/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombres']);
?>