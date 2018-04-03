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
		$this->load->view('v_certificados', $data);
	}
}