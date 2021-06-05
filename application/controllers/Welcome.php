<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(E_ALL);

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('htmltopdf_model');
		$this->load->library('pdf');
	}

	public function index()
	{	
// 		$result = $this->htmltopdf_model->allusers();
// 		$html_content = '';
// 			$html_content .= "
// 			<!DOCTYPE html>
// 			<html lang='en'>
// 			<style>
// 			h1{background-color:#eee;}
	
// 			table, th, td {
//   border: 1px solid black;
//   border-collapse: collapse;
// }


// 			</style>
// 			<head>
// 			 <meta charset='utf-8'>
// 			 <title>Welcome to CodeIgniter</title>
// 			</head>
// 			<body>








// <div style='float:left;width:100%;border: 1px solid black;'>

// <div style='float:left;width:30%'>
// </div>

// <div style='float:left;width:70%'>asfas</div>


// </div>






// 			</body>
// 			</html>";
// 		// 	$this->pdf->set_paper("A4", "portrait");
// 		// 	$this->pdf->loadHtml($html_content);
// 		// 	$this->pdf->render();
// 		// 	$this->pdf->stream("test.pdf", array("Attachment"=>0));


// 		// echo '<pre>';
// 		// print_r($result);
// 		// echo '</pre>';
// 		// die;
// 		// $html = iconv("UTF-8","UTF-8//IGNORE",$html_content);
// 		require_once(APPPATH.'mpdf\mpdf.php');
// 		$mpdf =new mPDF("","A4","","",10,10,10,10,6,3);
// 							 //$mpdf->setHTMLFooter($footer);
// 		$mpdf->WriteHTML($html_content);
// 		$mpdf->packTableData = true;
// 		$mpdf->SetDisplayMode('fullpage');
// 		$filename_pdf=time().".pdf";
// 							 //$user_mail=$_POST["hidemail"];
// 		$filename5=FCPATH."assets/".$filename_pdf;
// 		$mpdf->Output($filename5,'I');
// 		$this->load->view('htmltopdf', $result);
		$this->load->view('welcome_message');
	}
}
