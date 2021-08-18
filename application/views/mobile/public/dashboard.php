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
.registermenu{
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
</style>
</head>
<body class="home">
<div class="main-wrapper">

	<header>
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="left">
					<img src="<?php echo base_url('assets_mobile');?>/img/sunplus.png" alt="" style="width:100px">
				</div>
				
			</div>
		</div>
	</header>


	<div class="banner" style="height:200px">
		<div class="container">
			
		
		</div>
	</div>


	<div class="pages-list">
		<div class="container">
			<div class="pt-2 pb-4">
				<h5></h5>
			</div>
		<ul>
			<li >
				<a href="<?php echo base_url('mobile/public_dashboard/toko_terdekat');?>" style="background-color:#003399;color:#FFB904"><i class="fa fa-shopping-bag fa-lg" style="color:#FFB904"></i> <span style="color:#fff">Toko Terdekat</span><!--<i class="fa fa-chevron-right justify-content-end" style="color:#FFB904"></i>--></a>
			</li>
			
			<li >
				<a href="<?php echo base_url('mobile/public_dashboard/pengukuran');?>" style="background-color:#003399;color:#FFB904"><i class="fa fa-ruler fa-lg" style="color:#FFB904"></i> <span style="color:#fff">Pengukuran</span><!--<i class="fa fa-chevron-right justify-content-end" style="color:#FFB904"></i>--></a>
			</li>
			
		</ul>
		<div id="bottom">
			<div class="registermenu">
				
				<div class="row">
					<div class="col-8" style="font-size:9pt">
					  Andan belum masuk/daftar sebagai user kami
					</div>
					<div class="col-4  "  style="font-size:10pt;padding-top:4px">
					  <a href="<?php echo base_url('mobile/login');?>" style="color:#FFB904" class="link-register">MASUK/DAFTAR</a>
					</div>
				</div>
			</div>
		
		</div>
		</div>
		
	</div>



</div>

<script src="<?php echo base_url('assets_mobile');?>/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/popper.min.js"></script>
<script src="<?php echo base_url('assets_mobile');?>/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/plugins/swiper/js/swiper.min.js"></script>

<script src="<?php echo base_url('assets_mobile');?>/js/script.js"></script>
</body>

<!-- Mirrored from mentoring-mobile.dreamguystech.com/bootstrap4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:38:09 GMT -->
</html>