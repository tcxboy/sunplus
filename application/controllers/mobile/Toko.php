<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
	  if(!$this->session->sess_user['t_user_id'])redirect('mobile/login');
      
   }

	public function index()
	{
		  $this->load->view('mobile/toko/dashboard');
	}
	public function profil()
	{
		  $this->load->view('mobile/toko/profil');
	}
	public function daftar_produk()
	{
		  $id=$this->session->sess_user['t_user_id'];
		  $now = date('Y-m-d');
		  $load['profiltoko'] = $this->mm->get('t_user',array('where'=>'t_user_id = '.$id.''),'roar');
		  $load['produk'] =$ls= $this->mm->get('t_toko_stok',array('join'=>array(array('t_produk','t_produk.t_produk_id = t_toko_stok.t_produk_id','')),'where'=>'t_user_id = '.$id.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"','group'=>'t_toko_stok.t_produk_id'));
		    if($ls){
				  foreach($ls as $r){
					  $in = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokin','where'=>'t_user_id = '.$id.' AND t_produk_id = '.$r['t_produk_id'].' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"'),'roar');
					  $out = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokout','where'=>'t_user_id = '.$id.' AND t_produk_id = '.$r['t_produk_id'].' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "out"'),'roar');
					  $stok = $in['stokin']-$out['stokout'];
					  $load['stok'][$r['t_produk_id']]= $stok;
				  }
			  }
		  $this->load->view('mobile/toko/daftar_produk',$load);
	}
	public function daftar_pesanan()
	{
		  $this->load->view('mobile/toko/daftar_pesanan');
	}
	
}