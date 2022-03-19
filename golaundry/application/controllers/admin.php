<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
   {
    parent::__construct();
    $this->load->model('Madmin');
     $this->load->library('session');
   }

   function index()
  {
      // echo "string";
      $this->load->view('template/headeradmin');
      $this->load->view('logadmin');
      $this->load->view('template/footer');
  }


   public function login()
   {
          $Email = $this->input->post('Email');
          $Pass = $this->input->post('Pass');
          $data = $this->Madmin->cekDataUser($Email,$Pass);
          if ($data != NULL){
    $data_session = array(
     'id' => $data["Id_Pegawai"],
     'nama' => $data["Nama_Pegawai"],
     'status' => "login"
     );
    $this->session->set_userdata($data_session);
    redirect('pesanan');
          }else{
    $this->session->set_flashdata('message', 'error');
               redirect('admin');
          }
   }

   function logout(){
    $this->session->sess_destroy();
    redirect(base_url('GHome'));
   }



}
