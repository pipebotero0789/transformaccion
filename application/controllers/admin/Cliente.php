<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_cliente');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function guardarCliente()
	{
        if (is_null($this->input->post('id'))) 
        {
            $datosSlide = array(
                'cliente_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'empresa_id' => 1,
                'cliente_url' => $this->input->post('URL')
            );
            if ($this->Crud_cliente->Insertar($datosSlide)) {
                redirect('admin/ContenidoAdmin/cliente/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/cliente/-2');
            }
        }
        else
        {  
            $datosSlide = array(
                'cliente_nombre' => $this->input->post('Nombre'),
                'estado_id' => $this->input->post('Estado'),
                'empresa_id' => 1,
                'cliente_url' => $this->input->post('URL')
            );
            if ($this->Crud_cliente->editar($datosSlide,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/cliente/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/cliente/-2');
            }
        }
	}
}
