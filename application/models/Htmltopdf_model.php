<?php
class Htmltopdf_model extends CI_Model
{
	function fetch()
	{
		$this->db->order_by('CustomerID', 'DESC');
		return $this->db->get('tbl_customer');
	}
	function fetch_single_details($customer_id)
	{
		$this->db->where('CustomerID', $customer_id);
		$data = $this->db->get('tbl_customer');
		
		$output = '<html>
		<head>

		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
			<style>
				/** 
				* Set the margins of the PDF to 0
				* so the background image will cover the entire page.
				**/
				@page {
					size: 21cm 29.7cm;
					margin: 0cm 0cm;
				}
	
				/**
				* Define the real margins of the content of your PDF
				* Here you will fix the margins of the header and footer
				* Of your background image.
				**/
				body {
					margin-top:    2.5cm;
					margin-bottom: 1cm;
					margin-left:   1cm;
					margin-right:  1cm;
					font-family: "Roboto", sans-serif;
				}
	
				/** 
				* Define the width, height, margins and position of the watermark.
				**/
				#watermark {
					position: fixed;
					bottom:   0px;
					left:     0px;
					/** The width and height may change 
						according to the dimensions of your letterhead
					**/
					width:    21cm;
					height:   30cm;
	
					/** Your watermark should be behind every content**/
					z-index:  -1000;
				}




			</style>
		</head>
		<body>
			<div id="watermark">
				<img src="images/BNI-Kings-background.jpg" height="100%" width="100%" />
			</div>
	
			<main> 




		<table style="width:100%;"  cellspacing="5" cellpadding="5">';
		foreach($data->result() as $row)
		{
			$output .= '

            <tr>
				<td width="30%" style="">
				<img style="width: 220px;border-radius: 75px 75px 75px 75px;margin-top: 5px;box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;" src="'.base_url().'/assets/images/profile/'.$row->images.'">
				 </td>


				<td width="70%" style="">
				<div style="position: absolute;width:500px;left: 48%;top:5%">
					<span style="font-size: 32px;line-height: 1;padding: 2px 0;font-weight: 500;color: #e60b0b;">&nbsp;&nbsp;'.$row->CustomerName.'</span>

					<table>
					<tr>
					<td>
					<img style="width: 100px;border-radius: 50%;margin-top: 0px;box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;" src="'.base_url().'/assets/images/logo/'.$row->CompanyLogo.'"></td>
					<td><span style="color:gray"></span></td>
					<td> <span style="color:black;font-weight: 400;font-size:20px;">  

					<div>'.$row->spec.'<br>'.$row->CompanyName.'</span></div>



					</td>
					</tr>
					</table>

					<table>
					<td>
					<a href="callto:1234567"><span><img style="width:150px;" src="assets/images/icons/call.png"></span></a>
					<a href="mailto:'.$row->email.'"><span><img style="width:150px;" src="assets/images/icons/email.png"></span></a>
					<a href="http://'.$row->website.'" target="_blank"><span><img style="width:150px;" src="assets/images/icons/web.png"></span></a>
					</td>
					</table>
</div>



				</td>
			</tr>
       ';
		}
		$output .= '
		<tr>
			<td colspan="2" align="center"><img style="width:600px;" src="assets/images/icons/line.jpg"></td>
		</tr>
		';
		
		$output .= '</table>
		</main>
		</body>
	</html>';

		return $output;
		//echo $output;
	}
	function newdesign(){
	//	echo "hi";die;
				$data = $this->db->get('tbl_customer');
				$data1 = $this->db->get('tbl_customer')->result_array();
				$data_1=count($data1);

				

				foreach($data1 as $key2=>$val2){
					// echo '<pre>';
					// print_r($val2['CustomerID']);
					// // echo '</pre>';
					// // die;

					 $row[]=$val2['CustomerID'];

					//  echo '<pre>';
					//  print_r($val2);
					//  echo '</pre>';
					//  die;

					// s
					//die;
			




	$output = $key2.'<html>
		<head>

		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
			<style>
				/** 
				* Set the margins of the PDF to 0
				* so the background image will cover the entire page.
				**/
				@page {
					size: 21cm 29.7cm;
					margin: 0cm 0cm;
					page-break-after: always;
				}
	
				/**
				* Define the real margins of the content of your PDF
				* Here you will fix the margins of the header and footer
				* Of your background image.
				**/
				body {
					margin-top:    2.5cm;
					margin-bottom: 1cm;
					margin-left:   1cm;
					margin-right:  1cm;
					font-family: "Roboto", sans-serif;
				}
	
				/** 
				* Define the width, height, margins and position of the watermark.
				**/
				#watermark {
					position: fixed;
					bottom:   0px;
					left:     0px;
					/** The width and height may change 
						according to the dimensions of your letterhead
					**/
					width:    21cm;
					height:   30cm;
	
					/** Your watermark should be behind every content**/
					z-index:  -1000;
				}




			</style>
		</head>
		<body>
			<div id="watermark">
				<img src="images/BNI-Kings-background.jpg" height="100%" width="100%" />
			</div>
	
			<main> 




		<table style="width:100%;"  cellspacing="5" cellpadding="5">';
		 foreach($data->result() as $row)
		 {
		$output .= '

            <tr>
				<td width="30%" style="">
				<img style="width: 220px;border-radius: 75px 75px 75px 75px;margin-top: 5px;box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;" src="'.base_url().'assets/images/profile/'.$val2['images'].'">
				 </td>
				<td width="70%" style="">
				<div style="position: absolute;width:500px;left: 48%;top:5%">
					<span style="font-size: 32px;line-height: 1;padding: 2px 0;font-weight: 500;color: #e60b0b;">&nbsp;&nbsp;'.$key2.'</span>

					<table>
					<tr>
					<td>
					<img style="width: 100px;border-radius: 50%;margin-top: 0px;box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;" src="'.base_url().'assets/images/logo/'.$val2['CompanyLogo'].'"></td>
					<td><span style="color:gray"></span></td>
					<td> <span style="color:black;font-weight: 400;font-size:20px;">  

                  <div>'.$row->spec.'<br>'.$row->CompanyName.'</span></div>


					</td>
					</tr>
					</table>

					<table>
					<td>
					<a href="callto:1234567"><span><img style="width:150px;" src="http://192.168.60.251/htmltopdf/assets/images/icons/call.png"></span></a>
					<a href="mailto:'.$key2.'"><span><img style="width:150px;" src="http://192.168.60.251/htmltopdf/assets/images/icons/email.png"></span></a>
					<a href="http://'.$key2.'" target="_blank"><span><img style="width:150px;" src="http://192.168.60.251/htmltopdf/assets/images/icons/web.png"></span></a>
					</td>
					</table>
</div>



				</td>
			</tr>
       ';
		
		$output .= '
		<tr>
			<td colspan="2" align="center"><img style="width:600px;" src="http://192.168.60.251/htmltopdf/assets/images/icons/line.jpg"></td>
		</tr>
		';
	}
		$output .= '</table>
		</main>
		</body>
	</html>';
	//echo $output;

		return $output;
	}
		//echo $output;
		
	}
	function allusers(){
		$data = $this->db->get('tbl_customer')->result_array();
		return $data;
	}
}

?>