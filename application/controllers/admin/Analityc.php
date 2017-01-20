<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analityc extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_noticias');
        $this->load->config('ga_api');
        $params = [ 'client_email' => $this->config->item('account_email'), 'key_file' => $this->config->item('p12_key') ];
        $this->load->library('Gapi', $params);
        if (is_null($this->session->userdata('id'))) {
        	redirect('admin/Login');
        }
    }

	public function index()
	{
		$this->load->view('admin/head_view');
        $dataSend = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
		$datoNav = $this->load->view('admin/nav_view',$dataSend,TRUE);
		$datoDatos = $this->load->view('admin/datos_js',null,TRUE);
		$dataSend = array(
            "datos" => $datoDatos
        );
		$dataFooter = $this->load->view('admin/footer_view',$dataSend,TRUE);

		$this->gapi->requestReportData($this->config->item('ga_profile_id'), array('day'), array('sessions','users','pageviews','organicSearches','bounceRate'), 'day', '', date('Y-m-01'), date('Y-m-d'), 1, 500);

		$dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'totalSessions'	=> $this->gapi->getSessions(),
			'totalUsers'		=> $this->gapi->getUsers(),
			'totalPageViews'	=> $this->gapi->getPageviews(),
			'totalOrganik'	=> $this->gapi->getOrganicSearches(),
			'totalBounce'	=> $this->gapi->getBounceRate(),
        );
        $this->load->view('admin/analityc_view',$dataSend);
	}

}



