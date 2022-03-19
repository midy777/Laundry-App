<?php
 // 
class Mmasuk extends CI_model
{
 public function getAllUser()
 {
  $this->db->select('*');
  $this->db->from('pelanggan');
  $getm = $this->db->get();
  return $getm->result_array();
 }

 public function cekDataUser($Email ,$Kata_Sandi)
 {
        $this->db->where('Email',$Email);
        $this->db->where('Kata_Sandi',$Kata_Sandi);
    return $this->db->get('pelanggan')->row_array();
 }

 public function resetpass($Kata_Sandi)
 {
    // echo $this->input->post('Nama');
   // echo $this->input->post('Email');
   // echo $this->input->post('Pass');
   $data = [

      "Kata_Sandi" => $this->session->userdata('Kata_Sandi'),

   ];
   $this->db->where('Kata_Sandi', $Kata_Sandi);
   $this->db->update('resetpass', $data);
    }
 }
