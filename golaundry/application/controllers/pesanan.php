<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {

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
				 $this->load->model('Mpesanan');
				 $this->load->model('Mdetailtoko');
				 $this->load->library('form_validation');
				 $this->load->library('session');
				 $this->load->library('pagination');

		 }


     		    function index()
     		   {
						 	 $data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
							 // var_dump($data);
     		       $this->load->view('template/headeradmin');
     		       $this->load->view('pesanan', $data);
     		       $this->load->view('template/footer');
     		   }

					 function penjemputan($id)
					{
							$this->Mdetailtoko->UpdatePesanan($id,1);
							$data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
							// var_dump($data);
							$this->load->view('template/headeradmin');
							$this->load->view('pesanan', $data);
							$this->load->view('template/footer');
					}

					function pencucian($id)
				 {
						 $this->Mdetailtoko->UpdatePesanan($id,2);
						 $data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
						 // var_dump($data);
						 $this->load->view('template/headeradmin');
						 $this->load->view('pesanan', $data);
						 $this->load->view('template/footer');
				 }

				 function setrika($id)
				{
						$this->Mdetailtoko->UpdatePesanan($id,3);
						$data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
						// var_dump($data);
						$this->load->view('template/headeradmin');
						$this->load->view('pesanan', $data);
						$this->load->view('template/footer');
				}

				function packing($id)
			 {
					 $this->Mdetailtoko->UpdatePesanan($id,4);
					 $data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
					 // var_dump($data);
					 $this->load->view('template/headeradmin');
					 $this->load->view('pesanan', $data);
					 $this->load->view('template/footer');
			 }

			 function pengantaran($id)
			{
					$this->Mdetailtoko->UpdatePesanan($id,5);
					$data['pesanan'] = $this->Mpesanan->getPesananById($this->session->userdata('id'));
					// var_dump($data);
					$this->load->view('template/headeradmin');
					$this->load->view('pesanan', $data);
					$this->load->view('template/footer');
			}



   }
