<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('view_form_matakuliah');
 }
 public function cetak()
 {
 $data = [
 'kode' => $this->input->post('kode'),
 'nama' => $this->input->post('nama'),
 'sks' => $this->input->post('sks')
 ];
 $this->load->view('view_data_matakuliah', $data);
 } }