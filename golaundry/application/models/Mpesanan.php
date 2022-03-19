<?php

class Mpesanan extends CI_model
{
  public function getPesananById($id)
   {
     $this->db->select('memesan.*, Nama_Pelanggan');
     $this->db->join('pelanggan b', 'b.Id_Pelanggan=memesan.Id_Pelanggan', 'left');
     $this->db->where('Id_Pegawai', $id);
     return $this->db->get('memesan')->result_array();

   }


 public function tambahDataUser()
	{
    // echo $this->input->post('Nama');
		// echo $this->input->post('Email');
		// echo $this->input->post('Pass');
		$data = [
			"Nama_Pelanggan" => $this->input->post('Nama', true),
      "Email" => $this->input->post('Email', true),
      "Kata_Sandi" => $this->input->post('Pass', true),
		];
		$this->db->insert('pelanggan', $data);
    }
}
