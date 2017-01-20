<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_usuario');
        $this->load->model('crud/Crud_rol');
        $this->load->model('crud/Crud_parametria');
    }

	public function index($mensaje = null)
	{
		if (is_null($this->session->userdata('id'))) {
			$this->load->view('head_view');
			$datoNav = $this->load->view('admin/nav_view',null,TRUE);
			$dataFooter = $this->load->view('admin/footer_view',TRUE);
			$dataSend = array(
	            "footer" => $dataFooter,
	            "mensaje" => $mensaje,
	        );
	        $this->load->view('header_view', $this->traerDatosFooter());
	        $this->load->view('admin/login_view',$dataSend);
	        $this->load->view('footer_view',$this->traerDatosFooter());
	    }else
	    {
	    	$this->redirecionar($this->session->userdata('rol'));
	    }
	}

	public function logeo()
	{
		$clave = $this->input->post("clave", TRUE);
		$usuario_usuario = $this->input->post("usuario", TRUE);
		$usuario_id = $this->Crud_usuario->GetExiste($usuario_usuario,$clave);
		if ($usuario_id) {
			$where = array('usuario_id' => $usuario_id);
			$usuario = $this->Crud_usuario->GetDatos($where)[0];
			$this->crearSesion($usuario);
			$this->redirecionar($this->session->userdata('rol'));
			
		}else{
			$mensaje = 'Usuario o contraseña incorecto';
			$this->index($mensaje);
		};
		
	}

	/*public function registrate($mensaje = null)
	{
		if (is_null($this->session->userdata('id'))) {
			$this->load->view('head_view');
			$datoNav = $this->load->view('admin/nav_view',null,TRUE);
			$dataFooter = $this->load->view('admin/footer_view',TRUE);
			$dataSend = array(
	            "footer" => $dataFooter,
	            "mensaje" => $mensaje 
	        );
	        $this->load->view('header_view',$dataSend);
	        $this->load->view('admin/registro_view',$dataSend);
	        $this->load->view('footer_view',$this->traerDatosFooter());
	    }else
	    {
	    	$this->redirecionar($this->session->userdata('rol'));
	    }
	}*/

	public function redirecionar($rol_id)
	{
		$DatoRol = $this->Crud_rol->GetDatos($rol_id);
		redirect($DatoRol->rol_index);
	}

	private function crearSesion($pObjetoUsuario) {
        try {
            $this->session->set_userdata('id', $pObjetoUsuario->usuario_id);
            $this->session->set_userdata('nombre', $pObjetoUsuario->usuario_nombre.' '.$pObjetoUsuario->usuario_apellido);
            $this->session->set_userdata('imagen', $pObjetoUsuario->usuario_imagen);
            $this->session->set_userdata('rol', $pObjetoUsuario->rol_id);   
            if ($pObjetoUsuario->rol_id == 2) {
            	$this->session->set_userdata('programador', 1);  
            }else
            {
            	$this->session->set_userdata('programador', 0);  
            }
        } catch (Exception $ex) {
            $this->index();
        }

    }
    public function cerrarSesion(){
    	$array_sesiones = array('id' => '', 'nombre' => '','rol' => '','imagen' =>'');
 		$this->session->unset_userdata($array_sesiones);
        $this->session->sess_destroy();
        redirect("admin/Login");
	}
	
	public function traerDatosFooter($retVal = false)
	{
		$retu = array(
			'telefono' => $this->Crud_parametria->obtenerParametria('telefono'), 
			'correo' => $this->Crud_parametria->obtenerParametria('correo'), 
			'facebook' => $this->Crud_parametria->obtenerParametria('facebook'), 
			'twitter' => $this->Crud_parametria->obtenerParametria('twitter'), 
			'linkedin' => $this->Crud_parametria->obtenerParametria('linkedin')
		);
		return $retu;
	}

}
