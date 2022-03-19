<?php
 
class Madmin extends CI_model
{
 public function getAllUser()
 {
  $this->db->select('*');
  $this->db->from('pegawai');
  $getm = $this->db->get();
  return $getm->result_array();
 }

 public function cekDataUser($Email ,$Kata_Sandi)
 {
        $this->db->where('Email',$Email);
        $this->db->where('Kata_Sandi',$Kata_Sandi);
    return $this->db->get('pegawai')->row_array();
 }
}
