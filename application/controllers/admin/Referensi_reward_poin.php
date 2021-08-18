<?php defined('BASEPATH') OR exit('No direct script access allowed');

class referensi_reward_poin extends HX_Controller {

   public $_subj  = 'Refrensi Reward Poin';
   public $_ctrl  = 'referensi_reward_poin';
   public $_tabel = 't_reward_poin';
   public $_kunci = 't_reward_poin_id';
   public $limit =100;

   public function __construct()
   {
      parent::__construct();
      if(!$this->session->sess_user['id_user'])redirect('admin/login');
   }

   public function meta_data($tipe='auto')
   {
	  
       //tabel
      if ($tipe=='tabel') {
          $field['t_reward_poin_foto']= array('label'=>'Foto Reward',
                                      'tipe'=>'foto',
                                      'path_file'=>'foto',
                                      'lebar'=>'70px',
                                      'upload'=>'admin/'.$this->_ctrl.'/form_upload');
		 $field['t_reward_poin_hadiah']      = array('label'=>'Nama Reward','tipe'=>'text');
		 $field['t_reward_poin_jmlpoin']      = array('label'=>'Jumlah Poin','tipe'=>'text');
		 $field['t_reward_poin_status']      = array('label'=>'Status','tipe'=>'array','list'=>array('aktif'=>'Aktif','nonaktif'=>'Non Aktif') );
        
		 
      }

      //form
      else if ($tipe=='form') {
		  $field['t_reward_poin_hadiah']      = array('label'=>'Nama Reward','tipe'=>'text');
		  $field['t_reward_poin_jmlpoin']      = array('label'=>'Jumlah Poin','tipe'=>'text');
		  $field['t_reward_poin_status']      = array('label'=>'Status','tipe'=>'radio','list'=>array('aktif'=>'Aktif','nonaktif'=>'Non Aktif') );
	 }

      return $field;
   }
   
  

	public function index($offset=null)
	{
	   $this->load->library('hx_tabel');
	  
     $load['tambah']='yes';
      $get    = $this->input->get();
      $like   = array();
      $get_na = '';

      // if (isset($get['nama']) && $get['nama']) {
         // $get_na = $get['nama'];
         // $like   = array(array('ref_jenis_koperasi.jenis_koperasi',$get['nama']));
      // }

      // $field['nama']   = array('label'=>'Cari Nama','tipe'=>'text','value'=>$get_na);

      // $load['pencarian'] = ($get) ? TRUE : FALSE;
      // $load['form_cari'] = $this->hx_tabel->set_pencarian(array('aksi'=>'admin/refrensi_jenis_koperasi/index'),$field,$get);

	   //----------- parameter utk ambil data dr database ----------//
	  //$param['select']   = 'ref_jabatan.*,b.bagian_nama as namjab';
	  //$param['join']   = array(array('ref_bagian b','b.bagian_id=ref_jabatan.bagian_id','left'));
      $param['like']   = $like;
      $param['order']  = 't_reward_poin_jmlpoin ASC';
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

      $aksi['edit']       = 'admin/'.$this->_ctrl.'/form';

       //if($this->us['role']=='1'){
             $aksi['hapus']      = 'admin/aksi/hapus/'.$this->_ctrl.'/index/'.$this->_tabel.'/'.$this->_kunci;
       //}else{

       //}


      // generate HTML
      $load['_paging'] = $this->hx_tabel->set_halaman($hal,$this->limit,4);
      $load['_tabel']  = $this->hx_tabel->set_tabel($arr,$this->meta_data('tabel'),$result,$aksi);

      $load['_judul']  = $this->_subj;

      $this->view_admin('referensi', $load);
	}

   public function form($id=null)
   {
      $this->load->library('hx_form');

      $arr['kunci']    = $this->_kunci;
      $arr['tabel']    = $this->_tabel;
      $arr['subjek']   = $this->_subj;

      $arr['cs_form']  = 'vertical';
      $arr['cs_modal'] = 'modal-kecil';
      $arr['layout']   = 'single';

      $arr['url_redirect'] = 'admin/'.$this->_ctrl.'/index';
      $arr['url_action']   = 'admin/aksi/simpan';

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
	
}