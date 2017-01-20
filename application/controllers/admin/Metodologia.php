<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metodologia extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_metodologia');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarMetodologia()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'metodologia_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'metodologia_ruta' => $this->input->post('URL')
            );
            if ($this->Crud_metodologia->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/metodologia/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/metodologia/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'metodologia_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'metodologia_ruta' => $this->input->post('URL')
            );
            if ($this->Crud_metodologia->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/metodologia/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/metodologia/-2');
            }
        }
	}
}
