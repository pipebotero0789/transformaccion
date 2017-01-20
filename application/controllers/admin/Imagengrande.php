<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagengrande extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_imagengrande');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarImagengrande()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'imagengrande_ruta' => $this->input->post('URL'),
                'estado_id' => $this->input->post('Estado'),
                'seccion_id' => $this->input->post('Seccion')
            );
            if ($this->Crud_imagengrande->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/imagenGrande/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/imagenGrande/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'imagengrande_ruta' => $this->input->post('URL'),
                'estado_id' => $this->input->post('Estado'),
                'seccion_id' => $this->input->post('Seccion')
            );
            if ($this->Crud_imagengrande->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/imagenGrande/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/imagenGrande/-2');
            }
        }
	}
}
