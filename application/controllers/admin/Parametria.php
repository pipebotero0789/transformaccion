<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametria extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_parametria');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarParametria()
	{
        if (is_null($this->input->post('id'))) 
        {
            $dataSend = array(
                "facebook" => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'linkedin' => $this->input->post('linkedin'),
                'telefono' => $this->input->post('telefono'),
                'correo' => $this->input->post('correo'),
            );
            if ($this->Crud_parametria->editar("facebook", $dataSend['facebook']) and $this->Crud_parametria->editar("twitter", $dataSend['twitter']) and  $this->Crud_parametria->editar("linkedin", $dataSend['linkedin']) and $this->Crud_parametria->editar("telefono", $dataSend['telefono']) and $this->Crud_parametria->editar("correo", $dataSend['correo'])) {
                redirect('admin/ContenidoAdmin/parametria/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/parametria/-2');
            }
        }
	}
}
