<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_usuario');
        $this->load->library('Array_conevrt');
        $this->load->library('My_phpmailer');
        $this->load->library('correos/Correos_library');
        $this->load->library('basic_RestClient/my_restclient');
        /*
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
        */
    }

	public function guardarSlide()
	{
        if (is_null($this->input->post('id'))) 
        {
            $clave = $this->array_conevrt->generateRandomString();
            $datos = array(
                'usuario_usuario' => $this->input->post('Correo'),
                'usuario_nombre' => $this->input->post('Nombre'),
                'usuario_apellido' => $this->input->post('Apellido'),
                'usuario_cedula' => $this->input->post('Cedula'),
                'usuario_correo' => $this->input->post('Correo'),
                'usuario_imagen' => $this->input->post('URL'),
                'usuario_celular' => $this->input->post('Celular'),
                'usuario_clave' => md5($this->input->post('clave')),
                'rol_id' => $this->input->post('Rol'),
                'estado_id' => $this->input->post('Estado'),
                'usuario_codigo' => $clave
            );
            if ($this->Crud_usuario->Insertar($datos)) {
                $dataCorreos = array(
                        'dataNombre' => "GRUPO LA ESTACION",
                        'dataCorreo' => $this->input->post('Correo'),
                        'dataAsunto' => 'Gracias Por Registrate.',
                        'dataMensaje' => $this->correos_library->correoBienvenida($clave,$datos)
                );
                $this->my_phpmailer->enviarCorreo($dataCorreos);
                $dataMensaje = array(
                    "dataNumero" => $this->input->post('Celular'),
                    "dataMensaje" => 'Mensaje de texto.'
                );
                $this->my_restclient->enviarMensaje($dataMensaje);
                if (is_null($this->input->post('redirec'))) 
                {
                    redirect('admin/ContenidoAdmin/usuarios/-1');
                }else{
                    redirect('admin/Login');
                }   
            }
            else
            {
                if (is_null($this->input->post('redirec'))) 
                {
                    redirect('admin/ContenidoAdmin/usuarios/-1');
                }else{
                    redirect('admin/Login');
                }  
            }
        }
        else
        {  
            $datos = array(
                'usuario_usuario' => $this->input->post('Usuario'),
                'usuario_nombre' => $this->input->post('Nombre'),
                'usuario_apellido' => $this->input->post('Apellido'),
                'usuario_cedula' => $this->input->post('Cedula'),
                'usuario_correo' => $this->input->post('Correo'),
                'usuario_celular' => $this->input->post('Celular'),
                'usuario_imagen' => $this->input->post('URL'),
                'rol_id' => $this->input->post('Rol'),
                'estado_id' => $this->input->post('Estado')
            );
            if ($this->Crud_usuario->editar($datos,$this->input->post('id'))) {
                redirect('admin/ContenidoAdmin/usuarios/-1');
            }
            else
            {
                redirect('admin/ContenidoAdmin/usuarios/-2');
            }
        }
	}
}



