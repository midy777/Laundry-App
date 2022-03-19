<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cek extends CI_Controller {

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
				 $this->load->model('Mcek');
				 $this->load->model('Mdetailtoko');
				 $this->load->model('Mulasan');
   			 $this->load->library('form_validation');
				 $this->load->library('session');
				 $this->load->library('pagination');


		 }

     		    function index($id){
						if ($id == null) {
							$this->session->set_flashdata('message','ANDA BELUM MEMESAN');
							redirect('toko');
						} else{
								$data["toko"] = $this->Mcek->getLastPesanan($id);
							 // var_dump($data);
     		       $this->load->view('cek',$data);
     		       $this->load->view('template/footer');
						 }
     		   }


					  function selesai($id)
					{
							$this->Mdetailtoko->UpdatePesanan($id,6);
						  $data["toko"] = $this->Mulasan->getPesanan($id);
							// var_dump($data);
							$this->load->view('template/header');
     		      $this->load->view('ulasan', $data);
     		      $this->load->view('template/footer');
					}

					function ulasan($id)
				{
						$this->Mdetailtoko->UpdateUlasan($id);
						redirect('Ghome');
				}



   }
