<?php
 // Sarwan Muharram 1301174168
class Mulasan extends CI_model
{
  public function tambahDataUlasan()
 	{
     // echo $this->input->post('Nama');
 		// echo $this->input->post('Email');
 		// echo $this->input->post('Pass');
 		$data = [
 			"Id_Toko" => $this->input->post('Id_Toko', true),
       "Id_Pelanggan" => $this->input->post('Id_Pelanggan', true),
       "ulasan" => $this->input->post('ulasan', true),
 		];
 		$this->db->insert('ulasan', $data);
     }

    public function getPesanan($id)
	{
		$this->db->where('Id_Pesanan', $id);
		return $this->db->get('memesan')->row_array();
	}
}
