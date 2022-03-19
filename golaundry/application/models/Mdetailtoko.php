<?php

class Mdetailtoko extends CI_model
{
 public function getAllUser()
 {
  $this->db->select('*');
  $this->db->from('memesan');
  $getm = $this->db->get();
  return $getm->result_array();
 }

 public function tambahPesan()
	{
    // echo $this->input->post('Nama');
		// echo $this->input->post('Email');
		// echo $this->input->post('Pass');
		$data = [
      "Id_Pelanggan" => $this->session->userdata('id'),
      "Id_Pegawai" => $this->input->post('Id_Pegawai', true),
			"tgl_awal" => $this->input->post('tgl_awal', true),
      "tgl_akhir" => $this->input->post('tgl_akhir', true),
      "PesanTambah" => $this->input->post('message', true),
      "StatusPesanan"=> 0,
		];
		$this->db->insert('memesan', $data);
    }

    public function UpdatePesanan($id, $status)
   	{
      $data = [
        "StatusPesanan"=> $status,
   		];
      $this->db->where('Id_Pesanan', $id);
   		$this->db->update('memesan', $data);
       }

    public function UpdateUlasan($id)
   	{
      $data = [
        "Ulasan"=> $this->input->post('ulasan', true),
   		];
      $this->db->where('Id_Pesanan', $id);
   		$this->db->update('memesan', $data);
       }
}
