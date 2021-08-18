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
</style>
</head>
<body class="home">
<div class="main-wrapper">

	<header>
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="left">
					<a href="<?php echo base_url('mobile/public_dashboard');?>" class="btn btn-default btn-circle btn-circle-sm m-1" style="background-color:#fff;color:#000"><i class="fa fa-arrow-left"></i></a>
				</div>
				
			</div>
		</div>
	</header>


	<div class="bannermap" style="height:200px">
		
	</div>


	<div class="pages-list">
		<div class="container">
			<div class="pt-2 pb-4">
				<center><h5>Toko Terdekat</h5></center>
			</div>
			<ul>
			<?php if(@$toko){
				foreach($toko as $r){
				if($r['t_user_foto']){
					$foto = $r['t_user_foto'];
				}else{
					$foto = 'noimage.png';
				}
			?>
				<li style="border-bottom:2px solid #e5e5e5;padding:5px">
					<div class="row">
						<a href="<?php echo base_url('mobile/public_dashboard/profil_toko/'.$r['t_user_id'].'');?>" >
							<div class="col-4" style="font-size:9pt">
							  <img src="<?php echo base_url('foto/'.$foto.'');?>" alt="" style="width:150px">
							</div>
							<div class="col-8 "  style="font-size:10pt;padding-top:4px">
							  <p style="font-size:11pt;font-weight:bold"><?php echo $r['t_user_nm'];?></p>
							  <p style="font-size:9pt"><?php echo $r['t_user_alamat'];?></p>
							  <p style="font-size:9pt">radius</p>
							</div>
						</a>
					 </div>
				</li>
			<?php		 }} ?>
				
				
			</ul>
		
		</div>
		
	</div>



</div>

<script src="<?php echo base_url('assets_mobile');?>/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/popper.min.js"></script>
<script src="<?php echo base_url('assets_mobile');?>/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/plugins/swiper/js/swiper.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/script.js"></script>
</body>

</html>