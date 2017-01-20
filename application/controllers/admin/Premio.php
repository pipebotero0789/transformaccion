<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_premio');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarPremio()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'premio_descripcion' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'premio_ruta' => $this->input->post('URL')
            );
            if ($this->Crud_premio->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/premio/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/premio/-2');
            }
        }
        else
        {  
            $datosSlide = array(
               'premio_descripcion' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'premio_ruta' => $this->input->post('URL')
            );
            if ($this->Crud_premio->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/premio/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/premio/-2');
            }
        }
	}
}
