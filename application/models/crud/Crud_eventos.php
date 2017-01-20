<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_eventos extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        
    }

    public function GetDatos($whereArray = null,$select = null,$groupBy = null)
    {

        if (is_null($whereArray)) {
            $where = array('estado_id' => 1);
        }
        else
        {
            $where=$whereArray;  
        }
        if (is_null($select)) {
            $select = '*';
        }
        else
        {
            $select = $select;
        }
        return $this->Crud_model->obtenerRegistros('produccion_evento',$where,$select,null,null,null,$groupBy);
    }
    public function GetDatosTotal(){
        return $this->Crud_model->obtenerRegistros('produccion_evento',null,'*');
    }
    public function Insertar($arrayInsertar)
    {
        return $this->Crud_model->agregarRegistro('produccion_evento',$arrayInsertar);
    }
    public function editar($pArrayActualizar,$id)
    {
        return $this->Crud_model->actualizarRegistro('produccion_evento',$pArrayActualizar,array('evento_id' => $id));
    }
    
}

?>
