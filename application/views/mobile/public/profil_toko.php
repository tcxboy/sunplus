<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
<title>SUNPLUS</title>

<link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/feather.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/swiper/css/swiper.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/custom.css">
<style>
.btn-circle {
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  padding: 0;
  border-radius: 50%;
}

.btn-circle i {
  position: relative;
  top: -1px;
}

.btn-circle-sm {
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 0.9rem;
}

.btn-circle-lg {
  width: 55px;
  height: 55px;
  line-height: 55px;
  font-size: 1.1rem;
}

.btn-circle-xl {
  width: 70px;
  height: 70px;
  line-height: 70px;
  font-size: 1.3rem;
}
 #bottom {
                position:absolute;                 
                bottom:0;                         
                right:0;
				width:100%;
				padding-left:15px;
				padding-right:15px;
				padding-bottom:15px;
            }
.tokomenu{
	background-color: #000;
    display: inline-block;
    width: 100%;
    color: #fff;
    border-radius: 5px;
    display: flex;
    display: -webkit-flex;
    align-items: center;
    -webkit-align-items: center;
    padding: 10px;
}
a:active{
  background-color: #FFB904;
}
p {
    margin-bottom: 5px;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 0px solid #dee2e6;
}
.pages-list ul li {
    margin-bottom: 10px;
}
.col-4, .col-8 {
    position: relative;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
}
.pages-list ul li a {
    background-color: #fff;
    display: inline-block;
    width: 100%;
    color: #26292c;
    border-radius: 5px;
    display: flex;
    display: -webkit-flex;
    align-items: center;
    -webkit-align-items: center;
    padding: 0px; 
}
.stoktag{
	-webkit-border-top-left-radius: 30px;
-moz-border-radius-topleft: 30px;
border-top-left-radius: 30px;
}
.linkstoktag{
	margin-bottom:10px;
}
.inline-group {
  max-width: 11rem;
  padding: .5rem;
}

.inline-group .form-control {
  text-align: center;
}

.form-control[type="number"]::-webkit-inner-spin-button,
.form-control[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
</head>
<body class="home" style="background-color:#e7e7e7">
<div class="main-wrapper">

	<header style="border-bottom:1px solid #e7e7e7">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="left">
					<a href="<?php echo base_url('mobile/public_dashboard/toko_terdekat');?>" class="btn btn-default btn-circle btn-circle-sm m-1" style="background-color:#fff;color:#000"><i class="fa fa-arrow-left"></i></a> <b>Store</b>
				</div>
				<div class="">
					<a href="<?php echo base_url('mobile/public_dashboard/toko_terdekat');?>" class="btn btn-default btn-circle btn-circle-sm m-1" style="background-color:#fff;color:#003399"><i class="fa fa-shopping-cart"></i></a> 
				</div>
				
			</div>
		</div>
	</header>


	<div class="bannermap" style="background-color:#fff;padding: 89px 0 10px;margin-bottom:5px">
		<div class="container">
			<table width="100%" class="table">
				<tr>
					<td width="10%" style="color:#003399"><i class="fas fa-store"></i></td>
					<td><?php echo $profiltoko['t_user_nm'];?></td>
				</tr>
				<tr>
					<td style="color:#003399"><i class="fa fa-map-marker"></i></td>
					<td><?php echo $profiltoko['t_user_alamat'];?></td>
				</tr>
				<tr>
					<td style="color:#003399"><i class="fa fa-phone" aria-hidden="true"></i></td>
					<td><?php echo $profiltoko['t_user_nohp'];?> / <?php echo $profiltoko['t_user_notelp'];?></td>
				</tr>
			</table>
		</div>
	</div>


	<div class="pages-list" style="background-color:#e7e7e7;padding:5px">
		<div class="container">
			
			<ul>
				<li>
					<div class="row">
					<?php 
						if(@$produk){
							foreach($produk as $r){
								if($r['t_produk_foto']){
									$foto = $r['t_produk_foto'];
								}else{
									$foto = 'noimage.png';
								}
					?>
						<a href="#" class="linkstoktag" t_produk_id="<?php echo $r['t_produk_id'];?>"  id_toko="<?php echo $profiltoko['t_user_id'];?>" data-toggl="modal" data-target="#Modal">
							<div class="col-4" style="font-size:9pt">
							 <div style="padding:4px">
							  <img src="<?php echo base_url('foto/'.$foto.'');?>" alt="" style="width:1750px;height:80px">
							 </div>
							</div>
							<div class="col-8 "  style="font-size:10pt">
								 <div style="height:50px;padding:5px">
									   <p style="font-size:9pt"></p>
									   <p style="font-size:11pt;color:#003399;padding-left:10px"><?php echo $r['t_produk_nm'];?></p>
									 
								 </div>
								 <div  style="">
									 <div  class="stoktag" style="color:#fff;background-color:#FFB904;width:150px;float:right;height:40px;padding:13px 5px 5px 30px">
										<b>Stok : <?php echo $stok[$r['t_produk_id']];?></b>
									 </div>
								 </div>
							</div>
						</a>
					<?php }}?>	
						
					 </div>
				</li>
				
			</ul>
		
		</div>
		
	</div>



</div>





 <div id="Modal" class="modal fade " role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content" id="konten">
         
       
        
        </div>
      </div>
    </div>



<script src="<?php echo base_url('assets_mobile');?>/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/popper.min.js"></script>
<script src="<?php echo base_url('assets_mobile');?>/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/plugins/swiper/js/swiper.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/script.js"></script>
<script>
$( document ).ready(function() {
  
  $('#Modal').modal('hide');


  $('.linkstoktag').on('click', function(){
	
								  
		var id_produk = $(this).attr('t_produk_id');
		var id_toko = $(this).attr('id_toko');
			$.ajax({
				type: "POST",
				url : "<?php echo base_url("mobile/aksi/get_produk");?>",
				data: "id_produk="+id_produk+"&id_toko="+id_toko,
				success: function(data){
					$("#konten").html(data);
					$('#Modal').modal('show');
			}
		});
	
    
  });

});

$('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})

function pesan(id){
	location.href = '<?php echo base_url('mobile/login');?>';
}
function keranjang(id){
	location.href = '<?php echo base_url('mobile/login');?>';
}
</script>
</body>
</html>