<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require getcwd().'\vendor\autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

class Pdf2 extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }

	public function index(){
		$html2pdf = new Html2Pdf();
		$html2pdf->writeHTML('<h1>Hola mundo</h1>');
		$html2pdf->output();
	}
}
