<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_eventos');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarEvento()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'evento_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'evento_imagen' => $this->input->post('URL'),
                'evento_resumen' => $this->input->post('Resumen'),
                'evento_contenido' => $this->input->post('Descripcion'),
                'evento_orador' => $this->input->post('Orador'),
                'evento_fecha' => date('Y-m-d',strtotime($this->input->post('Fecha'))),
                'evento_facebook' => $this->input->post('Face'),
                'evento_twitter' => $this->input->post('Twit'),
                'evento_biografia' => $this->input->post('Descripcion1'),
            );
            if ($this->Crud_eventos->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/eventos/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/eventos/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'evento_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'evento_imagen' => $this->input->post('URL'),
                'evento_resumen' => $this->input->post('Resumen'),
                'evento_contenido' => $this->input->post('Descripcion'),
                'evento_orador' => $this->input->post('Orador'),
                'evento_fecha' => date('Y-m-d',strtotime($this->input->post('Fecha'))),
                'evento_facebook' => $this->input->post('Face'),
                'evento_twitter' => $this->input->post('Twit'),
                'evento_biografia' => $this->input->post('Descripcion1'),
            );
            if ($this->Crud_eventos->Editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/eventos/-1');
            } 
            else
            {
                redirect('admin/ContenidoAdmin/eventos/-2');
            }
        }
	}
}
