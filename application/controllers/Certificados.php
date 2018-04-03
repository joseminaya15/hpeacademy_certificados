<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificados extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_correo');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
        $data['nombre'] = $this->session->userdata('Nombres');
        $data['apellidos'] = $this->session->userdata('Apellidos');
        $data['pais'] = $this->session->userdata('Pais') == null ? '-' : $this->session->userdata('Pais');
        $data['correo'] = $this->session->userdata('correo');
        $data['empresa'] = $this->session->userdata('empresa') == null ? '-' : $this->session->userdata('empresa');
        $username        = $this->M_correo->getDatosCorreos($this->session->userdata('correo'));
        $html = '';
        $pdf  = '';
        foreach ($username as $key) {
            $pdf = RUTA_ARCHIVOS.$key->certificados;
            $html .= '<div class="certificados">
                        <div class="contenido">
                            <img src="'.RUTA_IMG.'logo/pdf.png">
                            <p>'.$key->nom_certf.'</p>
                        </div>
                        <a onclick="openPDF(&quot;'.$pdf.'&quot;)"><i></i>Previsualizar</a>
                    </div>';
        }
        $data['html'] = $html;
		$this->load->view('v_certificados', $data);
	}
}