<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function simpan()
   {
      $data  = $this->input->post('data');
      $url   = $this->input->post('url');
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;
	  if($data['password'] != null){
		  $data['password'] = sha1($data['password']);
	  }else{
		  unset($data['password']); 
	  }
	  if($data['Tanggal_Lahir']){
		  $data['Tanggal_Lahir'] = hx_tgl_mysql_id($data['Tanggal_Lahir']);
	  }
	  if($data['t_pengukuran_harga_permeter']){
		  $data['t_pengukuran_harga_permeter'] = hx_rupiah_mysql($data['t_pengukuran_harga_permeter']);
	  }
      if ($id) {
         $save  = $this->mm->save($tabel,$data,array($kunci=>$id));

         if ($save) {
            $pesan = hx_info('success','Perubahan data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Perubahan data gagal tersimpan');
         }
      }
      else {
         $save = $this->mm->save($tabel,$data);

         if ($save) {
            $pesan = hx_info('success','Data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Data gagal tersimpan');
         }
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect($url);
   }
    public function simpan_agenda()
   {
      $data  = $this->input->post('data');
      $url   = 'admin/home';
      $tabel = 't_agenda';
      $kunci = 'id_agenda';
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;
	  $data['id_pegawai'] = $this->us['id_pegawai'];
	  if($data['Tanggal_Mulai_Agenda']){
		  $data['Tanggal_Mulai_Agenda'] = hx_tgl_mysql_id($data['Tanggal_Mulai_Agenda']);
	  }
	  if($data['Tanggal_Selesai_Agenda']){
		  $data['Tanggal_Selesai_Agenda'] = hx_tgl_mysql_id($data['Tanggal_Selesai_Agenda']);
	  }
      if ($id) {
         $save  = $this->mm->save($tabel,$data,array($kunci=>$id));

         if ($save) {
            $pesan = hx_info('success','Perubahan data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Perubahan data gagal tersimpan');
         }
      }
      else {
         $save = $this->mm->save($tabel,$data);

         if ($save) {
            $pesan = hx_info('success','Data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Data gagal tersimpan');
         }
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect($url);
   }

      public function simpan_koperasi()
   {
      $data  = $this->input->post('data');
      $url   = $this->input->post('url');
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;
	  $data['bh_tgl'] = hx_tgl_mysql_id($data['bh_tgl']);
	  $data['bh_tgl_lama'] = hx_tgl_mysql_id($data['bh_tgl_lama']);

      if ($id) {
         $save  = $this->mm->save($tabel,$data,array($kunci=>$id));

         if ($save) {
            $pesan = hx_info('success','Perubahan data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Perubahan data gagal tersimpan');
         }
      }
      else {
         $save = $this->mm->save($tabel,$data);

         if ($save) {
            $pesan = hx_info('success','Data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Data gagal tersimpan');
         }
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect($url);
   }

   public function simpan_uang()
   {
      $data  = $this->input->post('data');
      $url   = $this->input->post('url');
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;

      if ($id) {
         $save  = $this->mm->save($tabel,$data,array($kunci=>$id));

         if ($save) {
            $pesan = hx_info('success','Perubahan data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Perubahan data gagal tersimpan');
         }
      }
      else {
         $save = $this->mm->save($tabel,$data);

         if ($save) {
            $pesan = hx_info('success','Data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Data gagal tersimpan');
         }
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect($url);
   }

   public function hapus($ctrl,$url,$tabel,$kunci,$id)
   {
      $del = $this->mm->delete($tabel,array($kunci=>$id));

      if ($del) {
         $pesan = hx_info('success','Data telah dihapus');
      }
      else {
         $pesan = hx_info('danger','Data gagal dihapus');
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect('admin/'.$ctrl.'/'.$url);
   }

   public function ubah_status($ctrl,$url,$tabel,$kunci,$id,$field,$status)
   {
	  if($field=='t_user_verifikasi'){
		  $save = $this->mm->save($tabel,array($field=>$status,'t_user_verifikasi_tgl'=>date('Y-m-d H:i:s')),array($kunci=>$id));
	  }else{
		  $save = $this->mm->save($tabel,array($field=>$status),array($kunci=>$id));
	  }
      

      if ($save) {
         $pesan = hx_info('success',ucwords(str_replace('_',' ',$field)).' telah diubah');
      }
      else {
         $pesan = hx_info('danger',ucwords(str_replace('_',' ',$field)).' gagal diubah');
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect('admin/'.$ctrl.'/'.$url);
   }
   
   public function ganti_password()
   {
	  if($this->input->post('password')){
		$data['pegawai_password']=md5($this->input->post('password')); 
	  }
	  $data['pegawai_wa'] = $this->input->post('wa');
	  $data['pegawai_email'] = $this->input->post('email');
	  
	  $datax['email'] = $this->input->post('email');
	  $datax['nomor_wa'] = $this->input->post('wa');
	  
	  
	  
		 if(@$_POST['foto'] != null){
			if (!file_exists('./as_back/foto_profil/')) {
				mkdir('./as_back/foto_profil/', 0777, true);
			 }
			 define('UPLOAD_DIR', './as_back/foto_profil/');
			 $foto = 'pp_'.time().'.png';
			   $image_parts = explode(";base64,", $_POST['foto']);
			   $image_type_aux = explode("image/", $image_parts[0]);
			   $image_type = $image_type_aux[1];
			   $dataf = base64_decode($image_parts[1]);
			   $file = UPLOAD_DIR .  ''.$foto.'';
			   $success = file_put_contents($file, $dataf);
			   $datax['pegawai_foto'] =$foto;
		 }
		 
	
      $save = $this->mm2->save('ref_pegawai',$data,array('pegawai_email'=>$this->us['username']));
	  $save = $this->mm->save('ref_pegawai',$datax,array('email'=>$this->us['username']));

      if ($save) {
         $pesan = hx_info('success',ucwords(str_replace('_',' ',$field)).' telah diubah');
      }
      else {
         $pesan = hx_info('danger',ucwords(str_replace('_',' ',$field)).' gagal diubah');
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect('admin/login/logout');
   }

   public function upload_file()
   {
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $url   = $this->input->post('url');
      $field = $this->input->post('field_tabel');
      $id    = $this->input->post('id_tabel');
      $path  = $this->input->post('path');
      $ext   = $this->input->post('ext');

      $rand = rand(111111111,999999999);
      $nama = $tabel.'-'.$id.'-'.$field.'-'.$rand;

      $dir = dirname(BASEPATH);

      if (!file_exists($dir.'/'.$path)) {
         mkdir($dir.'/'.$path,0777,true);
      }

      $config['upload_path']   = $dir.'/'.$path;
      $config['allowed_types'] = $ext;
      $config['file_name']     = $nama;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload($field)) {
         $error = array('error'=>$this->upload->display_errors());
         print_r($error); exit();

         $pesan = hx_info('danger','Gagal upload File '.ucwords(str_replace('_',' ',$field)));

         $this->session->set_flashdata('hx_info',$pesan);
         redirect($url);
      }
      else {
         $file = $this->upload->data();
         $data = array($field=>$file['file_name']);

         $save = $this->mm->save($tabel,$data,array($kunci=>$id));

         if ($save) {

            /*$file_lama = $this->input->post('foto_lama');

            if (isset($file_lama)) {
               $paths = $dir.'/'.$path.'/'.$file_lama;

               unlink($paths);
            }*/

            $pesan = hx_info('success','File '.ucwords(str_replace('_',' ',$field)).' berhasil diupload');
         }
         else {
            $pesan = hx_info('danger','Gagal upload File '.ucwords(str_replace('_',' ',$field)));
         }

         $this->session->set_flashdata('hx_info',$pesan);
         redirect($url);
      }
   }

   public function hapus_file($ctrl,$url,$tabel,$kunci,$id,$field,$file)
   {
      $get  = $this->input->get('path_file');

      $dir  = dirname(BASEPATH);
      $path = $dir.'/'.$get.'/'.$file;

      $del  = $this->mm->save($tabel,array($field=>''),array($kunci=>$id));

      if ($del) {
         unlink($path);

         $pesan = hx_info('success','File '.ucwords(str_replace('_',' ',$field)).' berhasil dihapus');
      }
      else {
         $pesan = hx_info('danger','File '.ucwords(str_replace('_',' ',$field)).' gagal dihapus');
      }

      $this->session->set_flashdata('hx_info', $pesan);
      redirect('admin/'.$ctrl.'/'.$url);
   }
   public function get_jml_notif_inbox()
   {
	   $getnotif = $this->mm->count('t_log_inbox',array('join'=>array(array('t_inbox','t_inbox.id_inbox = t_log_inbox.id_inbox','')),'where'=>'t_log_inbox.id_pegawai = '.$this->us['id_pegawai'].' AND status_notif="belum"'));
	   echo  $getnotif;
   }
   public function get_notif_inbox()
   {
	   $getnotif = $this->mm->get('t_log_inbox',array('join'=>array(array('t_inbox','t_inbox.id_inbox = t_log_inbox.id_inbox','')),'where'=>'t_log_inbox.id_pegawai = '.$this->us['id_pegawai'].' AND status_notif="belum"'));
	   if($getnotif){
		  foreach($getnotif as $rw){
			  echo '
										<li>
											<a href="'.base_url('admin/inbox/detail_inbox/'.$rw['id_inbox'].'').'" class="clearfix">
													<span class="msg-title">
														<i class="ace-icon fa fa-qrcode"></i>
														<span class="blue">'.$rw['Nomor_Surat'].'</span>
													</span>
													<span class="msg-time">
														<i class="ace-icon fa fa-user"></i>
														<span>'.$rw['Nama_Pengirim'].'</span>
													</span>
													<span class="msg-time">
														<i class="ace-icon fa fa-tag"></i>
														<span>'.$rw['Perihal_Surat'].'</span>
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-calendar"></i>
														<span>'.time_since(strtotime($rw['datetime'])).'</span>
													</span>
											</a>
										</li>
				   ';
		  } 
	   }
   }
   public function get_jml_notif_outbox()
   {
	   $getnotif = $this->mm->count('t_log_outbox',array('join'=>array(array('t_outbox','t_outbox.id_outbox = t_log_outbox.id_outbox','')),'where'=>'t_log_outbox.id_pegawai = '.$this->us['id_pegawai'].' AND status_notif="belum"'));
	   echo  $getnotif;
   }
    public function get_notif_outbox()
   {
	   $getnotif = $this->mm->get('t_log_outbox',array('join'=>array(array('t_outbox','t_outbox.id_outbox = t_log_outbox.id_outbox',''),array('ref_jenis_naskah','ref_jenis_naskah.id_jenis_naskah = t_outbox.naskah_id','')),'where'=>'t_log_outbox.id_pegawai = '.$this->us['id_pegawai'].' AND status_notif="belum"'));
	    if($getnotif){
		  foreach($getnotif as $rw){
			  if(@$rw['Nomor_Surat_Keluar']){ $ns = $rw['Nomor_Surat_Keluar']; }else{ $ns='belum ada nomor';}
				 $n = '';
			   if($rw['Instansi_Penerima'] != 'N;'){
																$lgdat = unserialize($rw['Instansi_Penerima']);
																
																foreach($lgdat as $k => $v){		
																			$n .= $v.',';
																	}
															}
			  echo '
										<li>
											<a href="'.base_url('admin/outbox/detail_outbox/'.$rw['id_outbox'].'').'" class="clearfix">
													<span class="msg-title">
														<i class="ace-icon fa fa-qrcode"></i>
														<span class="blue">'.$ns.'</span>
													</span>
													<span class="msg-time">
														<i class="ace-icon fa fa-user"></i>
														<span>'.$n.'</span>
													</span>
													<span class="msg-time">
														<i class="ace-icon fa fa-tag"></i>
														<span>'.$rw['jenis_naskah'].'</span>
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-calendar"></i>
														<span>'.time_since(strtotime($rw['datetime'])).'</span>
													</span>
											</a>
										</li>
										
				   ';
		  } 
	   }
   }
   public function upload_dokumen()
   {
	   'fffj';
   }
   
    public function pilih_kabupaten()
   {
      $kode = $this->input->post('propinsi_id');

      $data = $this->mm->get('t_kab',array('where'=>'t_propinsi_id='.$kode));

      if ($data) {
         echo '<option value="">- Kota/Kabupaten -</option>';
         foreach ($data as $list) {
            echo '<option value="'.$list['t_kab_id'].'">'.$list['t_kab_nm'].'</option>';
         }
      }
      else {
         echo '<option value="">- Kota/Kabupaten -</option>';
         echo '<option value="">Tidak ada hasil.</option>';
      }
   }
    public function pilih_kecamatan()
   {
      $kode = $this->input->post('t_kab_id');

      $data = $this->mm->get('t_kec',array('where'=>'t_kab_id='.$kode));

      if ($data) {
         echo '<option value="">- Kecamatan -</option>';
         foreach ($data as $list) {
            echo '<option value="'.$list['t_kec_id'].'">'.$list['t_kec_nm'].'</option>';
         }
      }
      else {
         echo '<option value="">- Kecamatan -</option>';
         echo '<option value="">Tidak ada hasil.</option>';
      }
   }

}