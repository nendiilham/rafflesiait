<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
  }

  function index()
  {
    $user = $this->m_user->listing();

    $data = array ( 'title'   => 'Data Pengguna',
                    'user'    => $user
    );
    $this->load->view('v_user', $data, FALSE);
  }

}
