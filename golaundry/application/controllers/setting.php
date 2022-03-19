<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller {

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
				 $this->load->library('form_validation');
				 $this->load->library('session');
				 $this->load->library('pagination');

		 }


     		    function index($id){
						// if ($id == null) {
 						// 	$this->session->set_flashdata('message','ANDA BELUM MEMESAN');
 						// 	redirect('toko');
 						// } else{
						 	 $data['toko'] = $this->Mtoko->getTokoById($id);
							 // var_dump($data['Nama_Toko']);
     		       $this->load->view('template/headeradmin');
     		       $this->load->view('setting', $data);
     		       $this->load->view('template/footer');
						 // }
     		   }

					 public function update($id)
					{
							$this->Mtoko->updateToko($id);
							$this->session->set_flashdata('message', 'success');
							redirect('setting/index/'.$id);

					}

					public function delete($id)
				 {
						 $this->Mtoko->delete($id);
						 $this->Mtoko->delete_akun($id);
						 $this->session->sess_destroy();
				     redirect(base_url('GHome'));
				 }



   }
