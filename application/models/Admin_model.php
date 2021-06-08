<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class Admin_model extends CI_Model {

  public function __construct() {
    parent::__construct();
      //load database library
    $this->load->database();

  }
  

  public function getLogin($data){
  
    $this->db->select("*")->from("tbl_user_login")->where($data);
    $res = $this->db->get()->result_array();
    
    return $res;

  }
  function edit_userdetails($id)
	{
		//$this->db->select('*');
		$this->db->where('CustomerID',$id);
		$query=$this->db->get('tbl_customer')->result_array();
		return $query;
	}
  function update_userdetails($id,$data)
	{
    
		$this->db->where('CustomerID',$id);
		$update_details = $this->db->update('tbl_customer',$data);
    echo $this->db->last_query();die;
		return $update_details;
	}


}