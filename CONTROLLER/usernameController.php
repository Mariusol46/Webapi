<?php
    class usernameController
    {
        private $model;
        public function __construct()
        {
            require_once("D://xampp/htdocs/WEB-APIREST/MODEL/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($nombres)
        {
            $id = $this->model->insertar($nombres);
            return ($id!=false) ? header("Location:mostrar.php?id=".$id):header("Location:crear.php");
        }
        public function mostrar($id)
        {
            return ($this->model->mostrar($id) != false) ? $this->model->mostrar($id) :header("Location:indice.php");
        }
        public function indice()
        {
            return ($this->model->indice()) ? $this->model->indice() :false;
        }
        public function actualizar($id, $nombres)
        {
            return ($this->model->actualizar($id,$nombres) != false) ? header("Location:mostrar.php?id=".$id) :header("Location:indice.php");
        }
        public function eliminar($id)
        {
            return ($this->model->eliminar($id)) ? header("Location:indice.php") :header("Location:mostrar.php?id=".$id) ;
        }
    }

?>