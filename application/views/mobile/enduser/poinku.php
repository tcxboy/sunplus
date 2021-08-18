<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
<title>SUNPLUS</title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets_mobile');?>/img/favicon.html">

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
.itempoin{
	padding:10px;
	box-shadow: 0px 1px 3px 1px rgba(170,169,169,0.7);
	-webkit-box-shadow: 0px 1px 3px 1px rgba(170,169,169,0.7);
	-moz-box-shadow: 0px 1px 3px 1px rgba(170,169,169,0.7);
	border-radius:4px;

}
.col-4{
	    position: relative;
    width: 100%;
    padding: 5px;
    

}
</style>
</head>
<body class="home">
<div class="main-wrapper">

	<header>
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="left">
					<a href="<?php echo base_url('mobile/enduser');?>" class="btn btn-default btn-circle btn-circle-sm m-1" style="background-color:#fff;color:#000"><i class="fa fa-arrow-left"></i></a> <b>Poin</b>
				</div>
				
			</div>
		</div>
	</header>


	<div class="bannermap" style="background-color:#fff;height:200px">
		<div>
			<center>
				<div style="width:130px;height:130px;background-color:#003399;color:#FFB904;border-radius:130px;padding-top:45px">
					<p style="font-size:11pt">Total poin</p>
					<p style="font-size:20pt;color:#fff"><?php echo $totalpoin;?></p>
				</div>
			</center>
		</div>
		<div style="padding:35px 15px 15px 15px" class="text-center">
		 <div class="row" style="margin-bottom:20px">
			<div class="col-4">
				<div class="itempoin">
					<p style="font-size:9pt">Poin hari ini</p>
					<p style="font-size:15pt;color:#003399">123</p>
				</div>
			</div>
			<div class="col-4">
				<div class="itempoin">
					<p style="font-size:9pt">Poin minggu ini</p>
					<p style="font-size:15pt;color:#003399">123</p>
				</div>
			</div>
			<div class="col-4">
				<div class="itempoin">
					<p style="font-size:9pt">Poin bulan ini</p>
					<p style="font-size:15pt;color:#003399">123</p>
				</div>
			</div>
		</div>
		<div class="row">
		 <?php if(@$reward){
				foreach($reward as $r){
					if($r['t_reward_poin_foto']){
						$foto = $r['t_reward_poin_foto'];
					}else{
						$foto = 'noimage.png';
					}
		 ?>
			<div class="col-4">
				<div class="itempoin">
				  <img src="<?php echo base_url('foto/'.$foto.'');?>" alt="" style="width:75px;height:100px">
				  <p><b><?php echo $r['t_reward_poin_hadiah'];?></b></p>
				  <p style="font-size:9pt">Poin : <?php echo $r['t_reward_poin_jmlpoin'];?></p>
				</div>
			</div>
		 <?php }} ?>
			
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