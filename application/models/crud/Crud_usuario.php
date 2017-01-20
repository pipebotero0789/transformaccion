<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_usuario extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        
    }

    public function GetExiste($usuario,$clave){
        $where = array('usuario_usuario' => $usuario, 'usuario_clave' => md5($clave));
        $total =  (int) $this->Crud_model->obtenerRegistros('produccion_usuario',$where,'case when COUNT(*) >=0 then p.usuario_id else 0 end total')[0]->total;
        return  ($total == 0 ) ? false : $total ;
    }


    public function GetDatos($whereArray = null){

        if (is_null($whereArray)) {
            $where = array('estado_id' => 1);
        }
        else
        {
            $where=array('estado_id' => 1)+$whereArray;
            $where=$whereArray;
        }
        return $this->Crud_model->obtenerRegistros('produccion_usuario',$where,'*');
    }
    public function GetDatosTotal(){
        return $this->Crud_model->obtenerRegistros('produccion_usuario',null,'*');
    }
    public function Insertar($arrayInsertar)
    {
        return $this->Crud_model->agregarRegistro('produccion_usuario',$arrayInsertar);
    }
    public function editar($pArrayActualizar,$id)
    {
        return $this->Crud_model->actualizarRegistro('produccion_usuario',$pArrayActualizar,array('usuario_id' => $id));
    }
   
}

?>
