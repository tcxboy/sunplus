<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Enduser extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
	  if(!$this->session->sess_user['t_user_id'])redirect('mobile/login');
      
   }

	public function index()
	{
		  $this->load->view('mobile/enduser/dashboard');
	}
	public function profil()
	{
		  $this->load->view('mobile/enduser/profil');
	}
	public function poinku()
	{
		  $now = date('Y-m-d');
		  $load['reward'] = $this->mm->get('t_reward_poin',array('where'=>'t_reward_poin_status = "aktif"','order'=>'t_reward_poin_jmlpoin ASC'));
		  $tpoin= $this->mm->get('t_enduser_poin',array('where'=>'t_user_id = '.$this->session->sess_user['t_user_id'].' AND t_enduser_poin_exp >= "'.$now.'"','order'=>'t_enduser_poin_exp ASC'));
		  $poin=0;
		  if($tpoin){
			  foreach($tpoin as $r){
				  if($r['t_enduser_poin_jenis'] == 'akumulasi'){
					  $poin += $r['t_enduser_poin_jml'];
				  }else  if($r['t_enduser_poin_jenis'] == 'redeem' && $r['t_enduser_poin_redeem_status'] == 'disetujui'){
					  $poin = $poin-$r['t_enduser_poin_jml']-;
				  }
			  }
		  }
		  $load['totalpoin'] = $poin;
		  $this->load->view('mobile/enduser/poinku',$load);
	}
	public function toko_terdekat()
	{
		  $load['toko'] = $this->mm->get('t_user',array('where'=>'t_user_level = "store" AND t_user_aktif = "Y"'));
		  $this->load->view('mobile/enduser/toko_terdekat',$load);
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
		  $this->load->view('mobile/enduser/profil_toko',$load);
	}
	
}