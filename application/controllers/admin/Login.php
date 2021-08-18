<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
         $this->load->view('admin/login');
      }
	}

   public function validasi()
   {
      $p = $this->input->post();

      if (empty($p)) {
         redirect('login');
      }

        $user = $this->mm->get('t_user',array('where'=>'t_user_username="'.$p['us'].'"'),'roar');

      if ($user)
      {
		  
         if (md5($p['pw'])===$user['t_user_password'])
         { 
						   $foto      = ($user['t_user_foto']) ? $user['t_user_foto'] : 'unknown.jpg';
						   $userlist = array('enduser'=>'Pelanggan','store'=>'Toko');
						   $sess = array('t_user_id'=>$user['t_user_id'],
										 'id_user'=>$user['t_user_id'],
										 't_user_nik'=>$user['t_user_nik'],
										 't_user_nm'=>$user['t_user_nm'],
										 't_user_nohp'=>$user['t_user_nohp'],
										 't_user_notelp'=>$user['t_user_notelp'],
										 't_user_email'=>$user['t_user_email'],
										 't_kec_id'=>$user['t_kec_id'],
										 't_propinsi_id'=>$user['t_propinsi_id'],
										 't_kab_id'=>$user['t_kab_id'],
										 't_user_alamat'=>$user['t_user_alamat'],
										 't_user_ktp'=>$userlist[$user['t_user_ktp']],
										 't_user_foto'=>$user['t_user_foto'],
										 't_user_lat'=>$user['t_user_lat'],
										 't_user_lng'=>$user['t_user_lng'],
										 't_user_username'=>$user['t_user_username'],
										 't_user_verifikasi'=>$user['t_user_verifikasi'],
										 't_user_verifikasi_tgl'=>$user['t_user_verifikasi_tgl'],
										 't_user_exp'=>$user['t_user_exp'],
										 't_user_last_login'=>$user['t_user_last_login'],
										 't_user_level'=>$user['t_user_level'],
										 'foto'=>$foto);
			
						   $this->session->set_userdata('sess_user',$sess);
						   
						   
						   
							 
						   //update waktu login
						   $up = array('t_user_last_login'=>date('Y-m-d H:i:s'));
						   $this->mm->save('t_user',$up,array('t_user_id'=>$user['t_user_id']));
			
						   
    
                   $pesan = hx_info('info','Anda berhasil masuk ke sistem');
                   $this->session->set_flashdata('hx_info', $pesan);
    			   redirect('admin/home');
			  
         }
         else
         {
            $pesan = hx_info('danger','Password yang anda masukan salah');
            $this->session->set_flashdata('hx_info',$pesan);

            redirect('admin/login');
         }
      }
      else
      {
         $pesan = hx_info('danger','Anda belum terdaftar. Silahkan mengubungi Administrator');
         $this->session->set_flashdata('hx_info', $pesan);

         redirect('admin/login');
      }
   }

   public function form()
   {
      $this->load->library('hx_form');

      $arr['kunci']    = 'id_user';
      $arr['tabel']    = 'user';
      $arr['subjek']   = 'Profil User';

      $arr['cs_form']  = 'vertical';
      $arr['cs_modal'] = 'modal-kecil';
      $arr['layout']   = 'single';
      $arr['attr']     = 'enctype="multipart/form-data"';

      $arr['url_redirect'] = 'admin/home/index';
      $arr['url_action']   = 'admin/login/simpan';

      $id  = $this->session->sess_user['id_user'];
      $val = $this->mm->get('user',array('where'=>'id_user='.$id),'roar');

      // array field
      $field['nama']     = array('label'=>'Nama Lengkap','tipe'=>'text','attr'=>'required');
      $field['username'] = array('label'=>'username','tipe'=>'text');
      $field['password'] = array('label'=>'Password','tipe'=>'password');
      $field['foto']     = array('label'=>'Foto Profil','tipe'=>'file');

      echo $this->hx_form->set_template($arr,$field,$val);
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

   public function logout()
   {
	   
	
      $this->session->sess_destroy();

      $pesan = hx_info('info','Anda berhasil keluar dari sistem');
      $this->session->set_flashdata('hx_info', $pesan);

		redirect('admin/login');
   }
}