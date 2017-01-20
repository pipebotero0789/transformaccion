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
                'exito_ruta' => $this->input->post('URL'),
                'exito_url' => $this->input->post('URL1'),
                'exito_descripcion' => $this->input->post('Descripcion')
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
                'exito_ruta' => $this->input->post('URL'),
                'exito_url' => $this->input->post('URL1'),
                'exito_descripcion' => $this->input->post('Descripcion')
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
