<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_user extends HX_Controller {

   public $_subj  = 'User';
   public $_ctrl  = 'referensi_user';
   public $_tabel = 't_user';
   public $_kunci = 't_user_id';

   public function __construct()
   {
      parent::__construct();
   }

   public function meta_data($tipe='auto')
   {
      $level = array('enduser'=>'Enduser','store'=>'Store / Toko','admin'=>'Admin');
	  $prov      = $this->mm->get('t_propinsi',array('select'=>'t_propinsi_id,t_propinsi_nm','order'=>'t_propinsi_nm'));
      $list_prov = array();
      foreach ($prov as $list) {
         $list_prov[$list['t_propinsi_id']] = $list['t_propinsi_nm'];
      }
	  
	  $kab      = $this->mm->get('t_kab',array('select'=>'t_kab_id,t_kab_nm','order'=>'t_kab_nm'));
      $list_kab = array();
      foreach ($kab as $list) {
         $list_kab[$list['t_kab_id']] = $list['t_kab_nm'];
      }
	  
	  $kec      = $this->mm->get('t_kec',array('select'=>'t_kec_id,t_kec_nm','order'=>'t_kec_nm'));
      $list_kec = array();
      foreach ($kec as $list) {
         $list_kec[$list['t_kec_id']] = $list['t_kec_nm'];
      }

      //tabel
      if ($tipe=='tabel') {
          $field['t_user_aktif']      = array('label'=>'Aktif',
                                      'tipe'=>'status',
                                      'pilihan'=>array('N'=>array('label'=>'Aktifkan User',
                                                                  'class'=>'btn-default'),
                                                       'Y'=>array('label'=>'Nonaktifkan User',
                                                                  'class'=>'btn-primary')),
                                      'url_status'=>'admin/aksi/ubah_status/'.$this->_ctrl.'/index/'.$this->_tabel.'/'.$this->_kunci);
									  
									  
		  $field['t_user_verifikasi'] = array('label'=>'Verifikasi',
                                      'tipe'=>'status',
                                      'pilihan'=>array('belum'=>array('label'=>'Belum',
                                                                  'class'=>'btn-default'),
                                                       'sudah'=>array('label'=>'Sudah',
                                                                  'class'=>'btn-primary')),
                                      'url_status'=>'admin/aksi/ubah_status/'.$this->_ctrl.'/index/'.$this->_tabel.'/'.$this->_kunci);

         $field['t_user_foto']       = array('label'=>'Foto',
                                      'tipe'=>'foto',
                                      'path_file'=>'foto',
                                      'lebar'=>'70px',
                                      'upload'=>'admin/'.$this->_ctrl.'/form_upload');

         $field['t_user_nm']       = array('label'=>'Nama','tipe'=>'text');
		 $field['t_user_nohp']       = array('label'=>'No HP','tipe'=>'text');
		 $field['t_user_notelp']       = array('label'=>'No Telp','tipe'=>'text');
		 $field['t_user_email']       = array('label'=>'Email','tipe'=>'text');
		 $field['t_user_alamat']       = array('label'=>'Alamat','tipe'=>'text');
        
		 $field['t_user_level']      = array('label'=>'Role / Level User','tipe'=>'array','list'=>$level);
         $field['t_user_username']   = array('label'=>'Username','tipe'=>'text');
        
         $field['t_user_last_login'] = array('label'=>'Login Terakhir','tipe'=>'tanggal','format'=>'d M Y H:i');
      }

      //form
      else if ($tipe=='form') {
         $field['t_user_nm']     = array('label'=>'Nama','tipe'=>'text','lebar'=>'6','attr'=>'required');
		 $field['t_user_nohp']     = array('label'=>'No HP','tipe'=>'text','lebar'=>'6','attr'=>'');
		 $field['t_user_notelp']     = array('label'=>'No Telp','tipe'=>'text','lebar'=>'6','attr'=>'');
		 $field['t_user_email']     = array('label'=>'Email','tipe'=>'text','lebar'=>'6','attr'=>'');
		 $field['t_propinsi_id']      = array('label'=>'Propinsi','tipe'=>'select','list'=>$list_prov,'attr'=>'required');
		 $field['t_kab_id']      = array('label'=>'Kota/Kabupaten','tipe'=>'select','list'=>$list_kab,'attr'=>'required');
		 $field['t_kec_id']      = array('label'=>'Kecamatan','tipe'=>'select','list'=>$list_kec,'attr'=>'required');
		 $field['t_user_alamat']     = array('label'=>'Alamat','tipe'=>'textarea','lebar'=>'6','attr'=>'');
		 
		 
         $field['t_user_level']    = array('label'=>'Role / Level User','tipe'=>'radio','list'=>$level,'attr'=>'required');
         $field['t_user_username'] = array('label'=>'Username','tipe'=>'text','lebar'=>'4','attr'=>'required');
         $field['t_user_password'] = array('label'=>'Password','tipe'=>'password','lebar'=>'4');
         $field['t_user_aktif']    = array('label'=>'Aktif','tipe'=>'radio','list'=>array('Y'=>'Ya','N'=>'Tidak'));
      }

      return $field;
   }

	public function index($offset=null)
	{
	   $this->load->library('hx_tabel');

      $get    = $this->input->get();
      $like   = array();
      $get_na = '';

      if (isset($get['t_user_nm']) && $get['t_user_nm']) {
         $get_na = $get['t_user_nm'];
         $like   = array(array('t_user.t_user_nm',$get['t_user_nm']));
      }

      $field['t_user_nm']   = array('label'=>'Cari Nama atau Username','tipe'=>'text','value'=>$get_na);

      $load['pencarian'] = ($get) ? TRUE : FALSE;
      $load['form_cari'] = $this->hx_tabel->set_pencarian(array('aksi'=>'admin/Referensi_user/index'),$field,$get);

	   //----------- parameter utk ambil data dr database ----------//
	   $where[$this->_tabel.'.t_user_verifikasi']='sudah';
      $param['where'] = $where;
      $param['like']   = $like;
      $param['order']  = 't_user_nm ASC';
      $param['limit']  = $this->limit;
      $param['offset'] = $offset;

      $result   = $this->mm->get($this->_tabel,$param);
      $jml_data = $this->mm->count($this->_tabel,$param);
      $jml_a    = ($offset) ? $offset+1 : 1;
      $jml_b    = (($offset+count($result))!=$jml_data) ? $offset+$this->limit : $jml_data;

      $hal['url_halaman'] = 'admin/'.$this->_ctrl.'/index';
      $hal['jml_data']    = $jml_data;
      $hal['jml_a']       = $jml_a;
      $hal['jml_b']       = $jml_b;

      $arr['nomor_hal']   = $jml_a;
      $arr['kunci']       = $this->_kunci;
	
	   $aksi['map']       = array(
								'url'=>'admin/'.$this->_ctrl.'/peta',
								'icon'=>'map-marker',
								'warna'=>'primary',
								'judul'=>'Lokasi',
								'class'=>'',
							);
      $aksi['edit']       = 'admin/'.$this->_ctrl.'/form';
      $aksi['hapus']      = 'admin/aksi/hapus/'.$this->_ctrl.'/index/'.$this->_tabel.'/'.$this->_kunci;
	 

      // generate HTML
      $load['_paging'] = $this->hx_tabel->set_halaman($hal,$this->limit,4);
      $load['_tabel']  = $this->hx_tabel->set_tabel($arr,$this->meta_data('tabel'),$result,$aksi);

       $load['_judul']  = 'Semua data user';

      $this->view_admin('referensi', $load);
	}
	 public function peta($id)
   {

      $where[$this->_tabel.'.'.$this->_kunci]=$id;
      $param['where'] = $where;
	  $param['select'] = ''.$this->_tabel.'.* ,t_propinsi.t_propinsi_Latitude,t_propinsi.t_propinsi_Longitude';
      $param['join']   = array(array('t_propinsi','t_propinsi.t_propinsi_id=t_user.t_propinsi_id','left'));
      $load['result'] = $this->mm->get($this->_tabel,$param,'roar');
      $load['_judul'] = 'Peta Lokasi';
      $this->view_admin('input_peta',$load);
   }
   public function simpan_peta()
   {
      $data = $this->input->post();
      $id   = $this->input->post($this->_kunci);

      $save = $this->mm->save($this->_tabel,$data,array($this->_kunci=>$id));

      if ($save) {
         $pesan = hx_info('success','Perubahan data telah tersimpan');
      }
      else {
         $pesan = hx_info('danger','Perubahan data gagal tersimpan');
      }

      $this->session->set_flashdata('hx_info',$pesan);
      redirect('admin/'.$this->_ctrl);
   }
   public function form($id=null)
   {
      $this->load->library('hx_form');

      $arr['kunci']    = $this->_kunci;
      $arr['tabel']    = $this->_tabel;
      $arr['subjek']   = $this->_subj;

      $arr['cs_form']  = 'vertical';
      $arr['cs_modal'] = 'modal-sedang';
      $arr['layout']   = 'single';

      $arr['url_redirect'] = 'admin/'.$this->_ctrl.'/index';
      $arr['url_action']   = 'admin/'.$this->_ctrl.'/simpan';
	  $arr['js_form'] = '
					<script>
						$(document).ready(function(){
			
							 $("#t_propinsi_id").change(function(){
								
								  var kode = $(this).val();
								  $.ajax({
									 type: "POST",
									 url : "'.base_url("admin/aksi/pilih_kabupaten").'",
									 data: "propinsi_id="+kode,
									 success: function(list){
										$("#t_kab_id").html(list);
									 }
								  });
							   });			  
							   $("#t_kab_id").change(function(){
								  
								  var kode = $(this).val();
								  $.ajax({
									 type: "POST",
									  url : "'.base_url("admin/aksi/pilih_kecamatan").'",
									 data: "t_kab_id="+kode,
									 success: function(list){
										$("#t_kec_id").html(list);
									 }
								  });
							   });
						});
						</script>
	  ';

      //jika edit
      $values = array();
      if ($id) {
         $values = $this->mm->get($this->_tabel,array('where'=>$this->_kunci.'='.$id),'roar');
      }

      echo $this->hx_form->set_template($arr,$this->meta_data('form'),$values);
   }

	public function form_upload($id,$field,$file=null)
	{
      $this->load->library('hx_form');

      if ($file) {
	      $arr_upload['foto'] = $file;
      }

      $arr_upload['ext']   = 'jpg,png';
      $arr_upload['size']  = '2097152';
      $arr_upload['path']  = 'foto';

      $arr_upload['tabel'] = $this->_tabel;
      $arr_upload['kunci'] = $this->_kunci;

      $arr_upload['url_redirect'] = 'admin/'.$this->_ctrl.'/index';
      $arr_upload['url_upload']   = 'admin/aksi/upload_file';

      echo $this->hx_form->set_upload($arr_upload,$id,$field);
	}

   public function simpan()
   {
      $data  = $this->input->post('data');
      $url   = $this->input->post('url');
      $tabel = $this->input->post('tabel');
      $kunci = $this->input->post('kunci');
      $id    = ($this->input->post($kunci)) ? $this->input->post($kunci) : null;
	  $simpan = array('t_user_nm'=>$data['t_user_nm'],
					  't_user_nohp'=>$data['t_user_nohp'],
					  't_user_notelp'=>$data['t_user_notelp'],
					  't_user_email'=>$data['t_user_email'],
					  't_propinsi_id'=>$data['t_propinsi_id'],
					  't_kab_id'=>$data['t_kab_id'],
					  't_kec_id'=>$data['t_kec_id'],
					  
					  't_user_alamat'=>$data['t_user_alamat'],
                      't_user_username'=>$data['t_user_username'],
                      't_user_aktif'=>$data['t_user_aktif'],
					   't_user_level'=>$data['t_user_level']);

      if ($data['t_user_password']) {
         $simpan['t_user_password']            = md5($data['t_user_password']);
         //$simpan['tgl_update_password'] = date('Y-m-d H:i:s');
      }

      if ($id) {
         $save  = $this->mm->save($tabel,$simpan,array($kunci=>$id));

         if ($save) {
            $pesan = hx_info('success','Perubahan data telah tersimpan');
         }
         else {
            $pesan = hx_info('danger','Perubahan data gagal tersimpan');
         }
      }
      else {
         $save = $this->mm->save($tabel,$simpan);

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
}