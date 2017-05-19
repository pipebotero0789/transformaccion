<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exito extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_exito');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarExito()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'exito_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'exito_profesion' => $this->input->post('profesion'),
                'exito_url' => $this->input->post('URL'),
                'exito_descripcion' => $this->input->post('Descripcion'),
                'exito_link' => $this->input->post('Link'),
                'exito_nivel' => $this->input->post('Nivel'),
                'exito_pais' => $this->input->post('Pais')
            );
            if ($this->Crud_exito->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/exito/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/exito/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'exito_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'exito_profesion' => $this->input->post('profesion'),
                'exito_url' => $this->input->post('URL'),
                'exito_descripcion' => $this->input->post('Descripcion'),
                'exito_nivel' => $this->input->post('Nivel'),
                'exito_link' => $this->input->post('Link'),
                'exito_pais' => $this->input->post('Pais')
            );
            if ($this->Crud_exito->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/exito/-1');
            } 
            else
            {
                redirect('admin/ContenidoAdmin/exito/-2');
            }
        }
	}
}
