<?php

class Mtoko extends CI_model
{
 public function getAllToko()
 {
   return $this->db->get("toko")->result_array();
 }

 public function caridata(){
$c = $this->input->POST ('cari');
$this->db->like('Nama_Toko', $c);
$query = $this->db->get ('toko');
return $query->result_array();
 }

 public function filter($lokasi, $promo, $durasi, $min, $max){
$c = $this->input->POST ('cari');
$this->db->where("lokasi",$lokasi);
$this->db->where("promo",$promo);
$this->db->where("durasi",$durasi);
$this->db->where("Harga BETWEEN $min AND $max");
$this->db->where("Harga BETWEEN $min AND $max");
$query = $this->db->get ('toko');
return $query->result_array();
 }

 public function getAllUlasan($id)
 {
   return $this->db->where('Id_Pegawai', $id)->where('StatusPesanan', 6)->get("memesan")->result_array();
 }

 public function getTokoById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('toko')->row_array();
	}

 public function tambahToko()
	{
    // echo $this->input->post('Nama');
		// echo $this->input->post('Email');
		// echo $this->input->post('Pass');
		$data = [

      "id" => $this->session->userdata('id'),
			"Nama_Toko" => $this->input->post('Nama_Toko', true),
      "Alamat_Toko" => $this->input->post('Alamat_Toko', true),
      "Motto" => $this->input->post('Motto', true),
      "Deskripsi" => $this->input->post('Deskripsi', true),
      "Nomor_hp" => $this->input->post('Nomor_hp', true),
      "Harga" => $this->input->post('Harga', true),

      // "Foto" => $this->input->post('Foto', true),
		];
		$this->db->insert('toko', $data);
    }

    public function updateToko($id)
   	{
       // echo $this->input->post('Nama');
   		// echo $this->input->post('Email');
   		// echo $this->input->post('Pass');
   		$data = [

         "id" => $this->session->userdata('id'),
   			 "Nama_Toko" => $this->input->post('Nama_Toko', true),
         "Alamat_Toko" => $this->input->post('Alamat_Toko', true),
         "Motto" => $this->input->post('Motto', true),
         "Deskripsi" => $this->input->post('Deskripsi', true),
         "Nomor_hp" => $this->input->post('Nomor_hp', true),
        "Harga" => $this->input->post('Harga', true),
         // "Foto" => $this->input->post('Foto', true),
   		];
      $this->db->where('id', $id);
   		$this->db->update('toko', $data);
       }

       public function tambahDataPegawai()
      	{
          // echo $this->input->post('Nama');
      		// echo $this->input->post('Email');
      		// echo $this->input->post('Pass');
      		$data = [
      			"Nama_Pegawai" => $this->input->post('Nama_Toko', true),
            "Email" => $this->input->post('Email', true),
            "Kata_Sandi" => $this->input->post('Pass', true),
      		];
      		$this->db->insert('pegawai', $data);
          }

    public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('toko');
    }

  public function delete_akun($id){
  $this->db->where('Id_Pegawai', $id);
  $this->db->delete('pegawai');
  }
}
