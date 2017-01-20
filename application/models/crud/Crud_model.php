<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');

/**
 * Description of crud_model
 *
 * @author YARA WEB Developer
 */
class Crud_model extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
    }

//fin del constructor


    /*
     * -------------------------------------------------------
     *  Método para obtener registros en el módulo accesorio 
     * ------------------------------------------------------- 
     */

    public function obtenerRegistros($pTabla, $pArrayWhere = NULL, $pSelect = NULL, $pLimit = NULL, $pOrder = NULL,$joins = NULL,$group =null) {
        //verifico el parámetro para preparar la consulta SELECT
        if ($joins != NULL) {
            for ($i=0; $i < count($joins); $i++) { 
                //echo $joins[$i]['conect'];
                $this->db->join($joins[$i]['tabla'], $joins[$i]['conect'], $joins[$i]['tipo_join']);
            }
            //var_dump($joins);
        }
        if ($pSelect != NULL and is_null($group)) {
            $this->db->select($pSelect);
        }//fin del if
        //verifico el parámetro para preparar la consulta WHERE
        if ($pArrayWhere != NULL) {
            $sqlRegistros = $this->db->where($pArrayWhere);
        }//fin del if
        if (isset($pLimit)):
            if (is_array($pLimit)):
                $this->db->limit($pLimit[0], $pLimit[1]);
            else:
                $this->db->limit($pLimit);
            endif;
        endif;
        if (!is_null($group)) 
        {
            $this->db->select($pSelect);
            $this->db->group_by($group);
        }
        //Order by
        //si hay valor de order
        if ($pOrder):
            $this->db->order_by($pOrder);
        endif;
        //realizo la consulta 
        $sqlRegistros = $this->db->get($pTabla.' p');
        //validamos si existen registros
        if ($sqlRegistros->num_rows() > 0) {
            //iniciamos la iteracion de los datos
            foreach ($sqlRegistros->result() as $filaTabla):
                $dataRegistro[] = $filaTabla;
            endforeach;
        }//fin del if
        else {
            //si no se encuentra ningún resultado en la consulta
            //se envia un arreglo vacio
            $dataRegistro = null;
        }
        //devolvemos la data
        return $dataRegistro;
    }

//fin del metodo


    /*
     * -------------------------------------------------------
     *  Método para obtener registros con metodos 
     *  JOIN y OR_WHERE Poco comúnes en el proceso
     * ------------------------------------------------------- 
     */

    public function obtenerRegistrosFull($pDataQuery) {
        //verifico el parámetro para preparar la consulta SELECT
        if (isset($pDataQuery["dataColumns"])) :
            $this->db->select($pDataQuery["dataColumns"]);
        endif;
        //verifico el parámetro para preparar la consulta WHERE
        if (isset($pDataQuery["dataWhere"])) :
            $this->db->where($pDataQuery["dataWhere"]);
        endif;
        //si hay valor de arrayWhereOr realizo preparo la condicionale orWhere
        if (isset($pDataQuery['dataWhereOr'])):
            $this->db->or_where($pDataQuery['dataWhereOr']);
        endif;
        //si hay valor de order by, se incluyen todos en una cadena separados por comas
        //ejemplo "usuario desc, id asc"
        if (isset($pDataQuery['dataOrder'])):
            $this->db->order_by($pDataQuery['dataOrder']);
        endif;
        //si hay valor de group by se agrega a la consulta
        if (isset($pDataQuery['dataGroupBy'])):
            $this->db->group_by($pDataQuery['dataGroupBy']);
        endif;
        //si hay valor de order
        if (isset($pDataQuery['dataOrder'])):
            $this->db->order_by($pDataQuery['dataOrder']);
        endif;
        //si hay un valor en dataJoin se incluye en la consulta
        if (isset($pDataQuery['dataJoin'])):
            $this->db->join($pDataQuery['dataJoin']['table'], $pDataQuery['dataJoin']['compare'], $pDataQuery['dataJoin']['method']);
        endif;
        //si hay un valor en dataLimit se incluye en la consulta
        if (isset($pDataQuery['dataLimit'])):
            $this->db->limit($pDataQuery['dataLimit']);
        endif;
        //realizo la consulta 
        $sqlRegistros = $this->db->get($pDataQuery['dataTable']);
        //validamos si existen registros
        if ($sqlRegistros->num_rows() > 0) :
            //iniciamos la iteracion de los datos
            foreach ($sqlRegistros->result() as $filaTabla):
                $dataRegistro[] = $filaTabla;
            endforeach;
        else :
            //si no se encuentra ningún resultado en la consulta
            //se envia un arreglo vacio
            $dataRegistro = null;
        endif;
        //devolvemos la data
        return $dataRegistro;
    }

//fin del metodo    


    /*
     * -------------------------------------------------------
     *  Método para obtener solo un registro y dada la necesidad
     *  retornarlo
     * ------------------------------------------------------- 
     */

    public function scalarRegistro($pDataQuery, $pReturn = NULL) {
        //creo la variable de retorno y le aignamos true
        $valorRetorno = TRUE;
        //si hay valor de arrayWhere realizo preparo la condicionale where
        if ($pDataQuery['dataWhere'] != NULL):
            $this->db->where($pDataQuery['dataWhere']);
        endif;
        //si hay valor de arrayWhereOr realizo preparo la condicionale orWhere
        if ($pDataQuery['dataWhereOr'] != NULL):
            $this->db->or_where($pDataQuery['dataWhereOr']);
        endif;
        //definimos la variable para el select campos a seleccionar
        $columns = "*";
        //si llega un valor para seleccionar cambiamos el valor de $columns
        if ($pDataQuery['dataColumns'] != NULL):
            $columns = $pDataQuery['dataColumns'];
            //asignamos el valor al select
            $this->db->select($columns);
        endif;
        //preparo la sentencia sql y obtengo los datos
        $sqlConsulta = $this->db->get($pDataQuery['dataTable'], 1, 0);

        //validamos si existen registros
        if ($sqlConsulta->num_rows() > 0):
            //validamos si se solicita el objeto
            if ($pReturn):
                //iteramos el objeto
                foreach ($sqlConsulta->result() as $filaTabla):
                    $valorRetorno[] = $filaTabla;
                endforeach;
            else:
                //cambiamos el estado a false
                $valorRetorno = FALSE;
            endif;
        //fin del if else
        endif;
        //fin del if
        //devolvemos el valor retorno
        return $valorRetorno;
    }

//fin del metodo



    /*
     * -------------------------------------------------------
     *  Método para agregar registros en el módulo accesorio 
     * ------------------------------------------------------- 
     */

    public function agregarRegistro($pTabla, $pArrayInsert) {

        //ejecuto la inserción
        return $insertar = $this->db->insert($pTabla, $pArrayInsert);
    }

//fin del médoto

    /*
     * -------------------------------------------------------
     *  Método para actualizar registros
     * ------------------------------------------------------- 
     */

    public function actualizarRegistro($pTabla, $pArrayActualizar, $pArrayWhere) {

        //hago la actualización
        $actualizar = $this->db->where($pArrayWhere);
        return $actualizar = $this->db->update($pTabla, $pArrayActualizar);
    }

    /*
     * -------------------------------------------------------
     *  Método para agregar registros multiples 
     * ------------------------------------------------------- 
     */

    public function agregarRegistroMultiple($pTabla, $pArrayInsert) {
        //creo la variable de retorno
        $valorRetorno = null;
        //ejecuto la inserción
        $valorRetorno = $this->db->insert_batch($pTabla, $pArrayInsert);

        //devolvemos la variable de retorno
        return $valorRetorno;
    }

//fin del médoto
//fin del médoto    
}

//fin de la clase
