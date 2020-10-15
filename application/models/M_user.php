<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function listing()
  {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->order_by('id_user', 'desc');
      $query = $this->db->get();
      return $query->result();
  }


}
