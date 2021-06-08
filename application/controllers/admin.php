<?php
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(E_ALL);

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('htmltopdf_model');
		$this->load->library('encryption');
		$this->load->library('pdf');
		$this->load->model('Admin_model');
		$this->load->library("form_validation");
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('encrypt');
	}

	public function index()
	{	
		if(!empty($this->input->post("btn-submit"))){

			$this->form_validation->set_rules('username','username','required');
				$this->form_validation->set_rules('password','password','required');
	
				if ($this->form_validation->run() == TRUE) {
					$data="";
					
					$data['username'] = $this->input->post("username");
					$data['password'] = md5($this->input->post("password")); 
	
					$check = $this->Admin_model->getLogin($data);
	
					if(!empty($check)){
						$this->session->set_userdata("username",$check[0]["username"]);
						$this->session->set_userdata("password",$check[0]["password"]);
						redirect("admin/dashboard");
					}else{
						$this->session->set_flashdata("msg","Please enter the valid username and password");
					}
				}else{
	
				}
			}
		$this->load->view('admin/login');
	}

    public function dashboard()
	{	
		$this->load->view('admin/dashboard');
	}
    public function viewgroup()
	{	$data['customer_data'] = $this->htmltopdf_model->fetch();
		// $this->load->view('htmltopdf', $data);
		$this->load->view('admin/viewgroup',$data);
	}
    public function addgroup()
	{	
		$this->load->view('admin/addgroup');
	}
	public function adduser()
	{	if(!empty($this->input->post("submit"))){

		
		 $this->form_validation->set_rules('customername','customername','required');
		// $this->form_validation->set_rules('companyname','companyname','required');
		// $this->form_validation->set_rules('companycategory','companycategory','required');
		// $this->form_validation->set_rules('address','address','required');
		// $this->form_validation->set_rules('city','city','required');
		// $this->form_validation->set_rules('pincode','pincode','required');
		// $this->form_validation->set_rules('phone','phone','required');
		// $this->form_validation->set_rules('emailid','emailid','required');
		if ($this->form_validation->run() == TRUE) {
			


			
		
					
			$insertdata['CustomerName'] = $this->input->post("customername");
			$insertdata['CompanyName'] = $this->input->post("companyname"); 
			//$insertdata['CompanyLogo'] = 
			$insertdata['spec'] = $this->input->post("companycategory");
		    $insertdata['Address'] = $this->input->post("address");
			$insertdata['City'] = $this->input->post("city");
		    $insertdata['PostalCode'] = $this->input->post("pincode");
			$insertdata['mobile'] = $this->input->post("phone");
			$insertdata['email'] = $this->input->post("emailid");
			$insertdata['website'] = $this->input->post("website");
			$insertdata['fb'] = $this->input->post("fb");
			$insertdata['insta'] = $this->input->post("instragram");
			$insertdata['powerteam'] = $this->input->post("powerteam");
			
			//$insertdata['spec'] = $this->input->post("spec");
// 			echo '<pre>';
// 			print_r($_POST);
// 			echo '</pre>';
			
// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';
// die;
			if (!empty($_FILES['companylogo']['name'])) {
                $config['upload_path'] = 'uploads/logo/';
                /*add 777 permission to directory*/  
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, TRUE);
                }
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 10000000;
                $config['file_name'] = $_FILES['companylogo']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('companylogo')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                } else {
                    $picture = '';
                    $error = array('error' => $this->upload->display_errors());
                    echo "<script>alert('JPG, JPEG, PNG and GIF type of file only is allowed and atleast 10MB of size');window.location = '" . base_url("index.php/signup") . "';</script>";
                }
            } else {
                $picture = '';
            }
			if (!empty($_FILES['profileimage']['name'])) {
                $config['upload_path'] = 'uploads/images/';
                /*add 777 permission to directory*/  
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, TRUE);
                }
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 10000000;
                $config['file_name'] = $_FILES['profileimage']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('profileimage')) {
                    $uploadData = $this->upload->data();
                    $picture1 = $uploadData['file_name'];
                } else {
                    $picture1 = '';
                    $error = array('error' => $this->upload->display_errors());
                    echo "<script>alert('JPG, JPEG, PNG and GIF type of file only is allowed and atleast 10MB of size');window.location = '" . base_url("index.php/signup") . "';</script>";
                }
            } else {
                $picture1 = '';
            }
						$insertdata['CompanyLogo'] = $picture;
						$insertdata['images'] = $picture1;

			

			$result=$this->db->insert('tbl_customer',$insertdata);
			
			

			if($result==1){
				$this->session->set_flashdata('message', '<span style="color:green;text-align:center;font-weight:bold;">Added Successfully</span>');
			}else{
				$this->session->set_flashdata('message', 'failed to add');
			}

		}else{

		}
	}
		$this->load->view('admin/adduser');
	}

	public function export_csv(){
	$data['customer_data'] = $this->db->get('tbl_customer')->result();
	header('Content-type: text/csv');
      header('Content-Disposition: attachment; filename="mgrdailyloglist.csv"');
      header('Pragma: no-cache');
      header('Expires: 0');
      $file = fopen('php://output', 'w');
      fputcsv($file, array('Sno','Name','email'));

      $k=0; foreach ($data["customer_data"] as $data){

         $k=$k+1;
		 

        $showdata["S.No"]=$k;
        $showdata["Name"]=$data['CustomerName'];
        $showdata["email"]=$data['email'];
       
        
         fputcsv($file, $showdata);
      }
     // exit();
     
		
	}
}