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

}