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
		$html='<html>
					<head>
						<link rel="stylesheet" href="http://hpedigitalmarketingacademy.com/Certificados/public/fonts/metric.css">
						<style>
							body,html{
								margin: 0;
								padding: 0;
								font-family: "MetricRegular";
							}
							.fondo-imagen{
								position: absolute;
								top: 0;
								left: 0;
								right: 0;
								bottom: 0;
								width: 100%;
								height: 100%;
							}
							.js-logo{
								padding-top: 150px;
							}
							.js-information{
								text-align: center;
								padding-top: 100px;
							}
							.js-information h2{
								font-size: 40px;
							}
						</style>
					</head>
					<body>
						<div class="fondo-imagen">
							<img style="width: 100%;" src="http://hpedigitalmarketingacademy.com/Certificados/public/img/fondo/fondo.png"/>
						</div>
						<div class="js-logo"><img width="180" src="http://hpedigitalmarketingacademy.com/Certificados/public/img/logo/logo-footer.png"/></div>
						<div class="js-information">
							<h2 style="font-family: "MetricRegular";">Certificado de participación</h2>
							<p>Por el presente certificamos que</p>
							<h2>Henry Rodríguez</h2>
							<p>ha completado satisfactoriamente el
							HPE Digital Marketing Academy
							y cuenta con los conocimientos esenciales para
							desarrollar campañas de Marketing Digital.</p>
							<p>_____________________</p>
							<p>Gabriella Guazzo</p>
							<p>Channel Marketing Manager, Latin America & Caribbean</p>
							<p>Miami, Florida</p>
							<p>Junio "X" de 2018</p>
						</div>
					</body>
				  </html>';
		$mpdf  = new \Mpdf\Mpdf();
		$mpdf ->writeHTML($html);
		$mpdf ->output();
	}
}
