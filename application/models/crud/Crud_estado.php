<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_estado extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        
    }

    public function GetDatos($rol_id){
        $where = array('estado_id' => $rol_id);
        return $this->Crud_model->obtenerRegistros('basica_estado',$where,'*')[0];
    }
    public function GetDatosTotal(){
        return $this->Crud_model->obtenerRegistros('basica_estado',null,'*');
    }
}

?>
