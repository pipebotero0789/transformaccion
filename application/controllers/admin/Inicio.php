<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_slide');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarSlide()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'slide_nombre' => $this->input->post('Nombre'),
                'slide_titulo' => $this->input->post('Titulo'),
                'slide_subtitulo' => $this->input->post('Descripcion'),
                'estado_id' => $this->input->post('Estado'),
                'slide_url' => $this->input->post('URL'),
                'slide_urlpeque' => $this->input->post('URL2')
            );
            if ($this->Crud_slide->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/slider/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/slider/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'slide_nombre' => $this->input->post('Nombre'),
                'slide_titulo' => $this->input->post('Titulo'),
                'slide_subtitulo' => $this->input->post('Descripcion'),
                'estado_id' => $this->input->post('Estado'),
                'slide_url' => $this->input->post('URL'),
                'slide_urlpeque' => $this->input->post('URL2')
            );
            if ($this->Crud_slide->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/slider/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/slider/-2');
            }
        }
	}
}
