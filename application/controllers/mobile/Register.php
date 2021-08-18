<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
	   $this->load->view('mobile/login/register');
	}

   public function simpan()
   {
      $data  = $this->input->post('data');
      $url   = $this->input->post('url');
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;

      $update = array('nama'=>$data['nama'],
                      'username'=>$data['username'],
                      'tgl_update'=>date('Y-m-d H:i:s'));

      if ($data['password']) {
         $update['password']            = sha1($data['password']);
         $update['tgl_update_password'] = date('Y-m-d H:i:s');
      }

      if ($_FILES) {
         $rand = rand(111111111,999999999);
         $nama = $tabel.'-'.$id.'-foto-'.$rand;

         $config['upload_path']   = './foto';
         $config['allowed_types'] = 'jpg|png';
         $config['file_name']     = $nama;

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('foto')) {
            $file = $this->upload->data();

            $update['foto'] = $file['file_name'];
         }
      }

      $save = $this->mm->save($tabel,$update,array($kunci=>$id));

      if ($save) {
         $pesan = hx_info('success','Perubahan data telah tersimpan');
      }
      else {
         $pesan = hx_info('danger','Perubahan data gagal tersimpan');
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect($url);
   }

}