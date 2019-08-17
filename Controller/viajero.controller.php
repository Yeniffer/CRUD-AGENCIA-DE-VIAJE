<?php
// se coloca el modelo que conecta el controlador
require_once 'model/viajero.php';

class ViajeroController{
    private $model;

    //creacion del modelo
    public function __CONSTRUCT()
    {
        
		$this->model = new viajero();
    }
    //plantilla principal
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/viajero/viajero.php';
        
    }
    public function Crud(){
        $vjro = new viajero();

        if(isset($_REQUEST['id_persona'])){
            $vjro= $this->model->Read($_REQUEST['id_persona']);
        }
        require_once 'view/header.php';
        require_once 'view/viajero/viajero.php';
      



    }

}
?>