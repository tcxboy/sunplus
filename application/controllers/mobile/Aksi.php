<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function get_produk()
   {
      // $id_produk = 1;
	  // $id_toko = 2;
	  $id_produk = $this->input->post('id_produk');
	  $id_toko = $this->input->post('id_toko');

		  $now = date('Y-m-d');
		  $produk =$ls= $this->mm->get('t_toko_stok',array('join'=>array(
																		  array('t_produk','t_produk.t_produk_id = t_toko_stok.t_produk_id',''),
																		  array('t_kategori','t_kategori.t_kategori_id = t_produk.t_kategori_id',''),
																		),'where'=>'t_user_id = '.$id_toko.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"'),'roar');
		  $in = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokin','where'=>'t_user_id = '.$id_toko.' AND t_produk_id = '.$id_produk.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"'),'roar');
		  $out = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokout','where'=>'t_user_id = '.$id_toko.' AND t_produk_id = '.$id_produk.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "out"'),'roar');
		  $stok = $in['stokin']-$out['stokout'];
		  if($produk['t_produk_foto']){
			$foto = $produk['t_produk_foto'];
		  }else{
			$foto = 'noimage.png';
		  }
      echo'
		 <div class="modal-body" style="padding: 0px;">
         <div style="padding:10px">
			<p style="padding-left:10px;color:#003399">'.$produk['t_produk_nm'].'</p>
		 </div>
		 <div style="padding:10px">
			<img src="'.base_url('foto/'.$foto.'').'" alt="" style="width:100%;height:200px">
		 </div>
		 <div style="padding:10px">
			<div class="row">
				<div class="col-7">
					<div class="input-group inline-group">
					  <div class="input-group-prepend">
						<button class="btn btn-outline-secondary btn-minus" style="background-color:#003399;color:#fff">
						  <i class="fa fa-minus"></i>
						</button>
					  </div>
					  <input class="form-control quantity" min="0" name="quantity" value="1" type="number" id="qty">
					  <div class="input-group-append">
						<button class="btn btn-outline-secondary btn-plus"  style="background-color:#003399;color:#fff">
						  <i class="fa fa-plus"></i>
						</button>
					  </div>
					</div>
				
				</div>
				<div class="col-5">
					<p style="float:right;color:#003399;padding-top:20px ">Stok : '.$stok.'</p>
				</div>
			 </div>
		 </div>
		 <div>
			<div class="row" style="background-color:#e7e7e7;margin-right:0px;margin-left:0px;padding:10px">
				<div class="col-6">
					<p style="font-size:9pt">Ketgori</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_kategori_nm'].'</p>
					<br/>
					<p style="font-size:9pt">Ukuran</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_panjang'].' '.$produk['t_produk_satuan_panjang'].'</p>
				</div>
				<div class="col-6" style="border-left:1px solid #003399 ">
					<p style="font-size:9pt">Tebal</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_tebal'].' '.$produk['t_produk_satuan_tebal'].'</p>
					<br/>
					<p style="font-size:9pt">Berat</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_berat'].' '.$produk['t_produk_satuan_berat'].'</p>
				</div>
			</div>
		 </div>
		 <div>
			<div class="row" style="margin-right:0px;margin-left:0px;">
				<div class="col-6" style="background-color:#003399;padding:13px;text-align:center;color:#fff" onclick="pesan(id);">
					Pesan
				</div>
				<div class="col-6" style="background-color:#FFB904;padding:13px;text-align:center;color:#fff" onclick="keranjang(id);">
					Keranjang
				</div>
			</div>
		 </div>
        </div>
		  ';
   }
    public function get_produk_toko()
   {
      // $id_produk = 1;
	  // $id_toko = 2;
	  $id_produk = $this->input->post('id_produk');
	  $id_toko = $this->input->post('id_toko');

		  $now = date('Y-m-d');
		  $produk =$ls= $this->mm->get('t_toko_stok',array('join'=>array(
																		  array('t_produk','t_produk.t_produk_id = t_toko_stok.t_produk_id',''),
																		  array('t_kategori','t_kategori.t_kategori_id = t_produk.t_kategori_id',''),
																		),'where'=>'t_user_id = '.$id_toko.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"'),'roar');
		  $in = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokin','where'=>'t_user_id = '.$id_toko.' AND t_produk_id = '.$id_produk.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "in"'),'roar');
		  $out = $this->mm->get('t_toko_stok',array('select'=>'sum(t_toko_stok_qty) as stokout','where'=>'t_user_id = '.$id_toko.' AND t_produk_id = '.$id_produk.' AND t_toko_stok_exp >= "'.$now.'" AND  t_toko_stok_jenis = "out"'),'roar');
		  $stok = $in['stokin']-$out['stokout'];
		  if($produk['t_produk_foto']){
			$foto = $produk['t_produk_foto'];
		  }else{
			$foto = 'noimage.png';
		  }
      echo'
		 <div class="modal-body" style="padding: 0px;">
         <div style="padding:10px">
			<p style="padding-left:10px;color:#003399">'.$produk['t_produk_nm'].'</p>
		 </div>
		 <div style="padding:10px">
			<img src="'.base_url('foto/'.$foto.'').'" alt="" style="width:100%;height:200px">
		 </div>
		 <div style="padding:10px">
			<div class="row">
				<div class="col-7">
					 <!--<div class="input-group inline-group">
					  <div class="input-group-prepend">
						<button class="btn btn-outline-secondary btn-minus" style="background-color:#003399;color:#fff">
						  <i class="fa fa-minus"></i>
						</button>
					  </div>
					  <input class="form-control quantity" min="0" name="quantity" value="1" type="number" id="qty">
					  <div class="input-group-append">
						<button class="btn btn-outline-secondary btn-plus"  style="background-color:#003399;color:#fff">
						  <i class="fa fa-plus"></i>
						</button>
					  </div>
					</div>-->
				
				</div>
				<div class="col-5">
					<p style="float:right;color:#003399;padding-top:20px ">Stok : '.$stok.'</p>
				</div>
			 </div>
		 </div>
		 <div>
			<div class="row" style="background-color:#e7e7e7;margin-right:0px;margin-left:0px;padding:10px">
				<div class="col-6">
					<p style="font-size:9pt">Ketgori</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_kategori_nm'].'</p>
					<br/>
					<p style="font-size:9pt">Ukuran</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_panjang'].' '.$produk['t_produk_satuan_panjang'].'</p>
				</div>
				<div class="col-6" style="border-left:1px solid #003399 ">
					<p style="font-size:9pt">Tebal</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_tebal'].' '.$produk['t_produk_satuan_tebal'].'</p>
					<br/>
					<p style="font-size:9pt">Berat</p>
					<p style="font-size:11pt;padding-left:10px;color:#003399">'.$produk['t_produk_berat'].' '.$produk['t_produk_satuan_berat'].'</p>
				</div>
			</div>
		 </div>
		 <!--<div>
			<div class="row" style="margin-right:0px;margin-left:0px;">
				<div class="col-6" style="background-color:#003399;padding:13px;text-align:center;color:#fff" onclick="pesan(id);">
					Pesan
				</div>
				<div class="col-6" style="background-color:#FFB904;padding:13px;text-align:center;color:#fff" onclick="keranjang(id);">
					Keranjang
				</div>
			</div>-->
		 </div>
        </div>
		  ';
   }

}