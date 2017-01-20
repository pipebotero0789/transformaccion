<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_slide');
        $this->load->model('crud/Crud_eventos');
        $this->load->model('crud/Crud_comentario');
        $this->load->model('crud/Crud_parametria');
    }

	public function index()
	{
		$setDatos = array('Slide' => $this->Crud_slide->GetDatos());
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('slider_view', $setDatos);
		$this->load->view('inicio_view');
		$this->load->view('footer_view');
	}

	public function quienes(){
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('about_view');
		$this->load->view('footer_view');
	}

	public function educacion(){
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('service_view');
		$this->load->view('footer_view');
	}

	public function galeria(){
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('portafolio_view');
		$this->load->view('footer_view');
	}

	public function contacto(){
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('contact_view');
		$this->load->view('footer_view');
	}

	public function eventos()
	{
		$where = array('estado_id' => 1);
		$datos = $this->Crud_eventos->GetDatos($where,'*,MONTH(evento_fecha) mesNumero');
		$tado = $this->Crud_eventos->GetDatos($where,"MONTH(evento_fecha) mesNumero,DATE_FORMAT(evento_fecha,'%b') mesNombre",'MONTH(evento_fecha)');
		$porfecha = $this->convertirArray($datos,$tado);
		$setDatos = array(
			'Eventos' => $datos,
			'porfecha' => $porfecha
			);
		$this->load->view('head_view');
		$this->load->view('header_view', $this->traerDatosFooter());
		$this->load->view('eventos_view', $setDatos);
		$this->load->view('footer_view');
	}

	public function conteEvento($id,$tipo){
		$this->load->view('head_view');
		$this->load->view('header_view',$this->traerDatosFooter());
		$retVal = (is_null($this->session->userdata('id')) and is_null($this->session->userdata('refrenda'))) ? true : false ;
		switch ($tipo) {
			case 'evento':
				$where = array('estado_id' => 1,'evento_id'=>$id);
				$where2 = array('estado_id' => 1);
				$datos = $this->Crud_eventos->GetDatos($where2,'*,MONTH(evento_fecha) mesNumero');
				$tado = $this->Crud_eventos->GetDatos($where2,"MONTH(evento_fecha) mesNumero,DATE_FORMAT(evento_fecha,'%b') mesNombre",'MONTH(evento_fecha)');
				$datosTempo = $this->Crud_eventos->GetDatos($where);
				$datosComent = $this->Crud_comentario->GetDatos($where);
				$porfecha = $this->convertirArray($datos,$tado);
				$setDatos = array(
					'datosImpresion' => $datosTempo,
					'bandera' => $retVal,
					'datosComentario' => $datosComent,
					'porfecha' => $porfecha,
					'Eventos' => $datos,
				);
				$this->load->view('contenidoevento_view',$setDatos);
			break;
			default:
				$this->load->view('contenidoevento_view',$setDatos);
			break;
		}
		$this->load->view('footer_view',$this->traerDatosFooter($retVal));
	}

	public function crearComentario($idevento){
		$datosSlide = array(
                'comentario_nombre' => $this->input->post('Nombre'),
                'estado_id' => 1,
                'evento_id' => $idevento,
                'comentario_correo' => $this->input->post('Correo'),
                'comentario_mensaje' => $this->input->post('Mensaje'),
            );
            if ($this->Crud_comentario->Insertar($datosSlide)) {
                redirect('Inicio/conteEvento/'.$idevento.'/evento');
            }
            else
            {
                redirect('Inicio/conteEvento/'.$idevento.'/evento');
            }
	}

	public function convertirArray($arrayDatos,$ArrayMes)
	{
		$post = array();
		$mes = array();
		foreach ($ArrayMes as $key) {
			$post = array();
			foreach ($arrayDatos as $key1) {
				if ($key->mesNumero == $key1->mesNumero) {
					array_push($post,array('evento_id' => $key1->evento_id,'evento_nombre'=> $key1->evento_nombre));
				}
			}
			array_push($mes,array('mes' => $this->returmes($key->mesNumero),'datos'=>$post));
		}
		return $mes;
	}
	public function returmes($mes)
	{
		switch ($mes) {
			case 1:
				return 'Enero';
			break;
			case 2:
				return 'Febrero';
			break;
			case 3:
				return 'Marzo';
			break;
			case 4:
				return 'Abril';
			break;
			case 5:
				return 'Mayo';
			break;
			case 6:
				return 'Junio';
			break;
			case 7:
				return 'Julio';
			break;
			case 8:
				return 'Agosto';
			break;
			case 9:
				return 'Septiembre';
			break;
			case 10:
				return 'Octubre';
			break;
			case 11:
				return 'Noviembre';
			break;
			case 12:
				return 'Diciembre';
			break;
		}
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
