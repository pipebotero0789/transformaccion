<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContenidoAdmin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_noticias');
        $this->load->model('crud/Crud_slide');
        $this->load->model('crud/Crud_perfil');
        $this->load->model('crud/Crud_parametria');
        $this->load->model('crud/Crud_eventos');
        $this->load->model('crud/Crud_estado');
        $this->load->model('crud/Crud_exito');
        $this->load->model('crud/Crud_usuario');
        $this->load->model('crud/Crud_rol');
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function index()
	{

	}
    public function usuarios($bandera = null)
    {
        $this->load->view('admin/head_view');
        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_inicio',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
                $datosSlider = null;
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
                $datosSlider = null;
            break;     
            case null:
                $mensaje = '';
                $datosSlider = null;
            break;  
            default:
                $mensaje = '';
                $where = array('usuario_id' => $bandera);
                $datosSlider = $this->Crud_usuario->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'dataUsuarios' => $this->Crud_usuario->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'DatosRol' => $this->Crud_rol->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/usuario_view',$dataSend);
    }

    public function slider($bandera = null)
    {
        $this->load->view('admin/head_view');
        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_inicio',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
                $datosSlider = null;
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
                $datosSlider = null;
            break;     
            case null:
                $mensaje = '';
                $datosSlider = null;
            break;  
            default:
                $mensaje = '';
                $where = array('slide_id' => $bandera);
                $datosSlider = $this->Crud_slide->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'Slide' => $this->Crud_slide->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/slider_view',$dataSend);
    }

    public function parametria($bandera = null)
    {
        $this->load->view('admin/head_view');

        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );

        $datosParametria = array(
            'telefono' => $this->Crud_parametria->obtenerParametria('telefono'), 
            'correo' => $this->Crud_parametria->obtenerParametria('correo'), 
            'facebook' => $this->Crud_parametria->obtenerParametria('facebook'), 
            'twitter' => $this->Crud_parametria->obtenerParametria('twitter'), 
            'linkedin' => $this->Crud_parametria->obtenerParametria('linkedin')   
            );

        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_inicio',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
            break;     
            case null:
                $mensaje = '';
            break;  
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'parametria' => $datosParametria,
            'error' => $mensaje
        );
        $this->load->view('admin/parametria_view',$dataSend);
    }

    public function eventos($bandera = null)
    {
        $this->load->view('admin/head_view');
        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_equipo',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
                $datosSlider = null;
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
                $datosSlider = null;
            break;     
            case null:
                $mensaje = '';
                $datosSlider = null;
            break;  
            default:
                $mensaje = '';
                $where = array('evento_id' => $bandera);
                $datosSlider = $this->Crud_eventos->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'Slide' => $this->Crud_eventos->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/evento_view',$dataSend);
    }

    public function exito($bandera = null)
    {
        $this->load->view('admin/head_view');
        $dataSendNav = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSendNav,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_equipo',null,TRUE);
        $dataSendFoot = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSendFoot,TRUE);
        switch ($bandera) {
            case -1:
                $mensaje = 'Carga Exitosa';
                $datosSlider = null;
            break;
            case -2:
                $mensaje = 'Carga Fallida intentelo de nuevo';
                $datosSlider = null;
            break;     
            case null:
                $mensaje = '';
                $datosSlider = null;
            break;  
            default:
                $mensaje = '';
                $where = array('exito_id' => $bandera);
                $datosSlider = $this->Crud_exito->GetDatos($where);
            break;
        }
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'Slide' => $this->Crud_exito->GetDatosTotal(),
            'DatosEstado' => $this->Crud_estado->GetDatosTotal(),
            'error' => $mensaje,
            'datosCarga' => $datosSlider
        );
        $this->load->view('admin/exito_view',$dataSend);
    }
}