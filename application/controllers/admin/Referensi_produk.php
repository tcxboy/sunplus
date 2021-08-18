<?php defined('BASEPATH') OR exit('No direct script access allowed');

class referensi_produk extends HX_Controller {

   public $_subj  = 'Refrensi Produk';
   public $_ctrl  = 'referensi_produk';
   public $_tabel = 't_produk';
   public $_kunci = 't_produk_id';
   public $limit =100;

   public function __construct()
   {
      parent::__construct();
      if(!$this->session->sess_user['id_user'])redirect('admin/login');
   }

   public function meta_data($tipe='auto')
   {
	  $kat = $this->mm->get('t_kategori');
	  $kategori_list = array();
	  foreach($kat as $r){
		  $kategori_list[$r['t_kategori_id']] = $r['t_kategori_nm'];
	  }
       //tabel
      if ($tipe=='tabel') {
          $field['t_produk_foto']= array('label'=>'Foto Produk',
                                      'tipe'=>'foto',
                                      'path_file'=>'foto',
                                      'lebar'=>'70px',
                                      'upload'=>'admin/'.$this->_ctrl.'/form_upload');
		 $field['t_produk_nm']      = array('label'=>'Nama','tipe'=>'text');
		 $field['t_kategori_id']      =  array('label'=>'Kategori','tipe'=>'array','list'=>$kategori_list );
		 $field['t_produk_panjang']      = array('label'=>'Panjang','tipe'=>'text');
		 $field['t_produk_satuan_panjang']      = array('label'=>'Satuan Panjang','tipe'=>'array','list'=>array('mm'=>'mm','cm'=>'cm','m'=>'meter') );
		 $field['t_produk_tebal']      = array('label'=>'Tebal','tipe'=>'text');
		 $field['t_produk_satuan_tebal']      = array('label'=>'Satuan Tebal','tipe'=>'array','list'=>array('mm'=>'mm','cm'=>'cm') );
		 $field['t_produk_berat']      = array('label'=>'Berat','tipe'=>'text');
		 $field['t_produk_satuan_berat']      = array('label'=>'Satuan Berat','tipe'=>'array','list'=>array('gr'=>'gr','ons'=>'ons','kg'=>'kg','ton'=>'ton') );
		 $field['t_produk_poin']      = array('label'=>'Poin','tipe'=>'text');
		 $field['t_produk_min_qtyforpoint']      = array('label'=>'Qty untuk poins','tipe'=>'text');
        
		 
      }

      //form
      else if ($tipe=='form') {
		 $field['t_produk_nm']      = array('label'=>'Nama','tipe'=>'text');
		 $field['t_kategori_id']      =  array('label'=>'Kategori','tipe'=>'select','list'=>$kategori_list );
		 $field['t_produk_panjang']      = array('label'=>'Panjang','tipe'=>'text');
		 $field['t_produk_satuan_panjang']      = array('label'=>'Satuan Panjang','tipe'=>'select','list'=>array('mm'=>'mm','cm'=>'cm','m'=>'meter') );
		 $field['t_produk_tebal']      = array('label'=>'Tebal','tipe'=>'text');
		 $field['t_produk_satuan_tebal']      = array('label'=>'Satuan Tebal','tipe'=>'select','list'=>array('mm'=>'mm','cm'=>'cm') );
		 $field['t_produk_berat']      = array('label'=>'Berat','tipe'=>'text');
		 $field['t_produk_satuan_berat']      = array('label'=>'Satuan Berat','tipe'=>'select','list'=>array('gr'=>'gr','ons'=>'ons','kg'=>'kg','ton'=>'ton') );
		 $field['t_produk_poin']      = array('label'=>'Poin','tipe'=>'number');
		 $field['t_produk_min_qtyforpoint']      = array('label'=>'Qty untuk poins','tipe'=>'number');
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

      if (isset($get['t_produk_nm']) && $get['t_produk_nm']) {
         $get_na = $get['t_produk_nm'];
         $like   = array(array('t_produk_nm',$get['t_produk_nm']));
      }

      $field['t_produk_nm']   = array('label'=>'Cari Nama','tipe'=>'text','value'=>$get_na);

      $load['pencarian'] = ($get) ? TRUE : FALSE;
      $load['form_cari'] = $this->hx_tabel->set_pencarian(array('aksi'=>'admin/referensi_produk/index'),$field,$get);

	   //----------- parameter utk ambil data dr database ----------//
	  //$param['select']   = 'ref_jabatan.*,b.bagian_nama as namjab';
	  //$param['join']   = array(array('ref_bagian b','b.bagian_id=ref_jabatan.bagian_id','left'));
      $param['like']   = $like;
      $param['order']  = 't_produk_nm ASC';
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