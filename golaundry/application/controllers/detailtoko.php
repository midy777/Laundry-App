<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class detailtoko extends CI_Controller {

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
	 function __construct(){
				 parent::__construct();
				  $this->load->model('Mtoko');
					$this->load->model('Mdetailtoko');
				 $this->load->library('form_validation');
				 $this->load->library('session');
				 $this->load->library('pagination');


		 }


		    function index($id)
		   {
				 	 $data["toko"] = $this->Mtoko->getTokoById($id);
				 	 $data['ulasan'] = $this->Mtoko->getAllUlasan($id);
					 // var_dump($data);
		       $this->load->view('template/header');
		       $this->load->view('detailtoko', $data);
		       $this->load->view('template/footer');

		   }

			 public function pesan()
		 	{
				// var_dump($this->input->post('tgl_awal', true));
		 			$this->Mdetailtoko->tambahPesan();
		 			$this->session->set_flashdata('message', 'success');
		 			redirect('detailtoko/konfirmasi');

		 	}

					    function Konfirmasi()
					   {
					       $this->load->view('template/header');
					       $this->load->view('konfirmasi');
					       $this->load->view('template/footer');
					   }
}
