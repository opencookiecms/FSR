<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datahandler extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function setRequestor()
  {

    $data = array(
      'r_name' => $this->input->post('requestorname'),
      'r_email' => $this->input->post('emails'),
      'r_date' => $this->input->post('requestdate'),
      'r_customer' => $this->input->post('customer'),
      'r_pname' => $this->input->post('productname'),
      'r_ptype' => $this->input->post('producttype'),
      'r_pdetails' => $this->input->post('productdetail'),
      'r_failure' => $this->input->post('catalogfailure'),
      'r_size' => $this->input->post('msize'),
      'r_special' => $this->input->post('special'),
      'r_status' => $this->input->post('status'),
      'r_timestap' => $this->createDate = date("Y-m-d H:i:s")
    );

    return $this->db->insert('requestor',$data);
  }

}
