<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-matakuliah');
 }
 public function cetak()
 {
 $data = [
 'nama' => $this->input->post('nama'),
 'nis' => $this->input->post('nis'),
 'kelas' => $this->input->post('kelas'),
 'tanggal' => $this->input->post('tanggal'),
 'tempat' => $this->input->post('tempat'),
 'alamat' => $this->input->post('alamat'),
 'jenis' => $this->input->post('jenis'),
 'agama'  => $this->input->post('agama'),
 ];
 $this->load->view('view-data-matakuliah', $data);
 }
}
