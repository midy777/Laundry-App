<?php
 //
class Mcek extends CI_model
{
  public function getLastPesanan($id)
   {
     $this->db->select('Nomor_hp, memesan.*');
     $this->db->join('toko', 'toko.id=memesan.Id_Pegawai', 'left');
     $this->db->order_by('Id_Pesanan','desc');
     $this->db->where('Id_Pelanggan', $id)->limit(1);
     return $this->db->get('memesan')->row_array();
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
