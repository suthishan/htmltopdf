<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HtmltoPDF extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('htmltopdf_model');
		$this->load->library('pdf');
	}

	public function index()
	{	
		$data['customer_data'] = $this->htmltopdf_model->fetch();
		$this->load->view('htmltopdf', $data);
	}

	public function index1()
	{	$result = $this->htmltopdf_model->allusers();
		$data['customer_data'] = $this->htmltopdf_model->fetch();
		echo json_encode($result);
	}

	public function details()
	{
		if($this->uri->segment(3))
		{
			$customer_id = $this->uri->segment(3);
			$data['customer_details'] = $this->htmltopdf_model->fetch_single_details($customer_id);
			$this->load->view('htmltopdf', $data);
		}
	}

	public function pdfdetails()
	{
		if($this->uri->segment(3))
		{
			$customer_id = $this->uri->segment(3);
			$html_content = '';
			$html_content .= $this->htmltopdf_model->fetch_single_details($customer_id);
			$this->pdf->set_paper("A4", "portrait");
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
		}
	}
	public function getallUsers(){
		
			$result = $this->htmltopdf_model->allusers();
			
			echo '<pre>';
			print_r($result);
			echo '</pre>';
			die;
			$this->load->view('htmltopdf', $result);


		
	}

	public function exportallpdfdetails()
	{
		//echo "hi";die;
		//if($this->uri->segment(3))
		//{

			$overalldetails=$this->db->get('tbl_customer')->result_array();
			// echo '<pre>';
			// print_r($overalldetails);
			// echo '</pre>';
			// die;
// 			foreach($overalldetails as $key=>$val){
// $customer_id[] = $val['CustomerID'];
// 			}
			
			$customer_id = '1';
			// echo '<pre>';
			// print_r($customer_id);
			// echo '</pre>';
			//die;
			//for($i=0;$i<5;$i++){
			$html_content = '';
			$html_content .= $this->htmltopdf_model->newdesign($customer_id);

		// echo '<pre>';
		// print_r($html_content);
		// echo '</pre>';
		// die;
			
			$this->pdf->set_paper("A4", "portrait",'0','0','0');
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			   // $this->pdf->SetDisplayMode('fullpage');

			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
			//}
			
		//}
	}

}

?>