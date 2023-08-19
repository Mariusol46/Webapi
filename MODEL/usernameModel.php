<?php
    class usernameModel
    {
        private $PDO;
        public function __construct()
        {
            require_once("D://xampp/htdocs/WEB-APIREST/CONFIG/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombres){
            $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombres)");
            $stament->bindParam(":nombres",$nombres);
            return($stament->execute())? $this->PDO->lastInsertId():false ;
        }
        public function mostrar($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() :false ;
        }
        public function indice(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() :false;
        }
        public function actualizar($id,$nombres){
            $stament = $this->PDO->prepare("UPDATE username SET nombres = :nombres WHERE id = :id");
            $stament->bindParam(":nombres",$nombres);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id :false;
        }
        public function eliminar($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true :false;
        }
    }

?>