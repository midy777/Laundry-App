<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends CI_Controller {

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


		    function index()
		   {
				 	$data['toko'] = $this->Mtoko->getAllToko();
					// var_dump($data);
		       $this->load->view('template/header');
		       $this->load->view('toko', $data);
		       $this->load->view('template/footer');
		   }

			 function cari() {
				 $data['toko']=$this->Mtoko->caridata();
				 //jika data yang dicari tidak ada maka akan keluar informasi
				 //bahwa data yang dicari tidak ada
				 if($data['toko']==null) {
						print 'maaf data yang anda cari tidak ada atau keywordnya salah';
						print br(2);
						print anchor('welcome','kembali');
						}
						else {
						 $this->load->view('template/header');
						 $this->load->view('toko', $data);
						 $this->load->view('template/footer');
						}
		 }
				function filter() {
					 $lokasi = $this->input->POST ('lokasi');
					 $min =  $this->input->POST ('min');
					 $max =  $this->input->POST ('max');
					 $promo =  $this->input->POST ('promo');
					 $durasi =  $this->input->POST ('durasi');
					 $data['toko']=$this->Mtoko->filter($lokasi,$promo,$durasi,$min,$max);
					 // var_dump($lokasi);
					 $this->load->view('template/header');
					 $this->load->view('toko', $data);
					 $this->load->view('template/footer');
 				}

			 function daftar()
			{
				$this->load->view('template/header');
				$this->load->view('registertoko');
				$this->load->view('template/footer');
			}

			public function tambah()
			{
					if ($this->input->post('Pass')!=$this->input->post('rePass')){
						$this->session->set_flashdata('message', 'error_not_match');
		                redirect('toko/daftar');
					}
					$this->Mtoko->tambahToko();
					$this->Mtoko->tambahDataPegawai();
					$this->session->set_flashdata('message', 'success');
					redirect('admin');

			}
}
