<?php

class Mregister extends CI_model
{
 public function getAllUser()
 {
  $this->db->select('*');
  $this->db->from('pelanggan');
  $getm = $this->db->get();
  return $getm->result_array();
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
