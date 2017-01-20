<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_equipo');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarEquipo()
	{
        //var_dump($this->input->post('Descripcion'));
        
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'equipo_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'equipo_ruta' => $this->input->post('URL'),
                'equipo_descripcion' => $this->input->post('Descripcion')
            );
            if ($this->Crud_equipo->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/equipo/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/equipo/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'equipo_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'equipo_ruta' => $this->input->post('URL'),
                'equipo_descripcion' => $this->input->post('Descripcion')
            );
            if ($this->Crud_equipo->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/equipo/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/equipo/-2');
            }
        }
	}
}
