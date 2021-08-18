<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
	   $id = $this->session->sess_user['id_user'];

		if ($id) {
         $pesan = hx_info('info','Sesi anda masih aktif');
         $this->session->set_flashdata('hx_info', $pesan);

		   redirect('admin/home');
      }
      else {
         $this->load->view('daftar');
      }
	}

   

   public function simpan()
   {
      $data  = $this->input->post('data');
      $url   = 'daftar';
      $tabel = 'user';
      $kunci = 'id_user';
      $cekuser = $this->mm->get('user',array('where'=>'username="'.$data['username'].'"'),'roar');
	  if( $cekuser == null){
			  $update = array('nama'=>$data['nama'],
							  'username'=>$data['username'],
							  'tgl_update'=>date('Y-m-d H:i:s'));

			  if ($data['password']) {
				 $update['password']            = sha1($data['password']);
				 $update['tgl_update_password'] = date('Y-m-d H:i:s');
			  }
			  $update['role']  = 'op';
			  $update['aktif']  = 'Y';
			  
			  

			 $save = $this->mm->save($tabel,$update);

			  if ($save) {
					   $user = $this->mm->get('user',array('where'=>'username="'.$data['username'].'"'),'roar');
					   $tgl_login = hx_tgl(substr($user['login_terakhir'],0,10),'d-m-Y').' '.substr($user['login_terakhir'],11,5);
					   $foto      = ($user['foto']) ? $user['foto'] : 'unknown.jpg';

					   $sess = array('id_user'=>$user['id_user'],
									 'nama'=>$user['nama'],
									 'role'=>$user['role'],
											'id_akses'=>$user['id_akses'],
											'nama_akses'=>$user['nama_akses'],
									 'foto'=>$foto,
									 'tgl_login'=>$tgl_login);

					   $this->session->set_userdata('sess_user',$sess);

					   //update waktu login
					   $up = array('login_terakhir'=>date('Y-m-d H:i:s'));
					   $this->mm->save('user',$up,array('id_user'=>$user['id_user']));

					   $pesan = hx_info('info','Anda berhasil masuk ke sistem');
					   $this->session->set_flashdata('hx_info', $pesan);
					   redirect('user/home'); 
			  }
			  else {
				 $pesan = hx_info('danger','Perubahan data gagal tersimpan');
				 $this->session->set_flashdata('hx_info',$pesan);
				 redirect($url);
			  }
	  }else{
				 $pesan = hx_info('danger','Username sudah ada, Silahkan mengganti username anda.');
				 $this->session->set_flashdata('hx_info',$pesan);
				 redirect($url);
	  }
   }

  
}