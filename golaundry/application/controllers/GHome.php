<?php

class GHome extends CI_Controller
{

  function __construct(){
        parent::__construct();
        // $this->load->model('Mhome');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');

    }
   function index()
  {

      $this->load->view('template/header');
      $this->load->view('home');
      $this->load->view('template/footer');
      // $this->load->view('template/header');
      // $this->load->view('login');
      // $this->load->view('template/footer');

  }



}
?>
