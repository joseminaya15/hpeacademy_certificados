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
		$html2pdf->writeHTML('<html>
								<head>
									<style>
										.js-fondo{
											background: url(http://www.marketinghpe.com/microsite/ecb/public/img/fondo/fondo-home.jpg) no-repeat center center;
										    position: absolute;
										    top: 0;
										    left: 0;
										    right: 0;
										    bottom: 0;
											background-size: cover;
											height: 100vh;
											z-index: 10;
										}
											h1{color: red;}
										}
									</style>
								</head>
								<body>
									<div class="js-fondo"></div>
									<h1>Hola mundo</h1>
									<img src="http://www.marketinghpe.com/microsite/ecb/public/img/fondo/fondo-home.jpg"/>
								</body>
							  </html>');
		$html2pdf->output();
	}
}
