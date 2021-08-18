<?php defined('BASEPATH') OR exit('No direct script access allowed');

class public_dashboard extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
      
   }

	public function index()
	{
		  $this->load->view('mobile/public/dashboard');
	}
	public function toko_terdekat()
	{
		 $load['toko'] = $this->mm->get('t_user',array('join'=>array(array('t_propinsi','t_propinsi.t_propinsi_id = t_user.t_propinsi_id','left')),'where'=>'t_user_level = "store" AND t_user_aktif = "Y"'));
		 $this->load->view('mobile/public/toko_terdekat',$load);
	}
	public function profil_toko($id=null)
	{
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
		  $this->load->view('mobile/public/profil_toko',$load);
	}
	public function pengukuran()
	{
		  $load['pengukuran'] = $this->mm->get('t_pengukuran',array('join'=>array(array('t_produk','t_produk.t_produk_id = t_pengukuran.t_produk_id',''))));
		  $this->load->view('mobile/public/pengukuran',$load);
	}
	
}