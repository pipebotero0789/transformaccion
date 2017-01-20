<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_noticias');
        $this->load->library('Array_conevrt');
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


		$dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav
        );
        $this->load->view('admin/home_view',$dataSend);
	}

    public function upload($width = null,$height = null,$input = null ) {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $tipo = $this->obtenerExtensionFichero($_FILES['file']['name']);
            $urlCarga = '/file/img/uploader/';
            $targetPath = getcwd() .$urlCarga;
            $randomize = $this->array_conevrt->generateRandomString();
            $targetFile = $targetPath . $randomize.'tempo.'.$tipo;
            $targetFileRedimencion = $targetPath . $randomize.'.'.$tipo;
            move_uploaded_file($tempFile, $targetFile);
            if (true !== ($pic_error = $this->image_resize($targetFile,$targetFileRedimencion, $width,$height, 1))) {
                unlink($targetFile);
                $retorno = array('error' => $pic_error,'url' =>'','input'=>$input);
                echo json_encode($retorno, JSON_FORCE_OBJECT); 
            }
            else{
                unlink($targetFile);
                $retorno = array('error' => 'Carga Exitosa','url' => 'uploader/'. $randomize.'.'.$tipo,'input'=>$input);
                echo json_encode($retorno, JSON_FORCE_OBJECT); 
            }
        }
    }

    public function obtenerExtensionFichero($str)
    {
        $filename = substr(strrchr($str, "."), 1);
        return $filename;
    }
    
    public function image_resize($src, $dst, $width = null, $height= null, $crop=0){

      if(!list($w, $h) = getimagesize($src)) return "Error: 001x112 Imagen tipo no soportada";

      $type = strtolower(substr(strrchr($src,"."),1));
      if($type == 'jpeg') $type = 'jpg';
      switch($type){
        case 'bmp': $img = imagecreatefromwbmp($src); break;
        case 'gif': $img = imagecreatefromgif($src); break;
        case 'jpg': $img = imagecreatefromjpeg($src); break;
        case 'png': $img = imagecreatefrompng($src); break;
        default : return "Error: 001x112 Imagen tipo no soportada";
      }
      if (is_null($width) or is_null($height)) {
           $width = $w;
           $height = $h;
      }
      // resize
      if($crop){
        if($w < $width or $h < $height) return "Error: 001x111 Imagen demasiado pequeña tamaño minimo ".$width."X".$height ;
        $ratio = max($width/$w, $height/$h);
        $h = $height / $ratio;
        $x = ($w - $width / $ratio) / 2;
        $w = $width / $ratio;
      }
      else{
        if($w < $width and $h < $height) return "Error: 001x111 Imagen demasiado pequeña tamaño minimo ".$width."X".$height ;
        $ratio = min($width/$w, $height/$h);
        $width = $w * $ratio;
        $height = $h * $ratio;
        $x = 0;
      }

      $new = imagecreatetruecolor($width, $height);

      // preserve transparency
      if($type == "gif" or $type == "png"){
        imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
        imagealphablending($new, false);
        imagesavealpha($new, true);
      }

      imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

      switch($type){
        case 'bmp': imagewbmp($new, $dst); break;
        case 'gif': imagegif($new, $dst); break;
        case 'jpg': imagejpeg($new, $dst); break;
        case 'png': imagepng($new, $dst); break;
      }
      return true;
    }
    public function menuviejo($visual,$datos = null){
        $retVal = (is_null($datos)) ? 'datos_js/datos_js_0' : 'datos_js/'.$datos ;
        $this->load->view('admin/head_view');
        $dataSend = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5) 
            )
        );
        $datoNav = $this->load->view('admin/nav_view',$dataSend,TRUE);
        $datoDatos = $this->load->view('admin/'.$retVal,null,TRUE);
        $dataSend = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/footer_view',$dataSend,TRUE);


        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav
        );
        $this->load->view('template/'.$visual,$dataSend);
        
    }
}
