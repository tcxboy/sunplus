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
</style>
</head>
<body class="home">
<div class="main-wrapper">

	<header>
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="left">
					<a href="<?php echo base_url('mobile/enduser');?>" class="btn btn-default btn-circle btn-circle-sm m-1" style="background-color:#fff;color:#000"><i class="fa fa-arrow-left"></i></a>
				</div>
				
			</div>
		</div>
	</header>


	<div class="bannermap" id="peta" style="height:200px">
		
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
						<a href="<?php echo base_url('mobile/enduser/profil_toko/'.$r['t_user_id'].'');?>" >
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



<?php
$obj = array();
if($toko){
	foreach($toko as $r){
		$cor1 = str_replace(".","",$r['t_user_lat']);
		$fix_cor = substr_replace( $cor1,".",2,0);

		$cor2 = str_replace(".","",$r['t_user_lng']);
		$fix_cor2 = substr_replace( $cor2,".",3,0);
		$obj[] = '['.$fix_cor.', '.$fix_cor2.', "'.@$r['nama_kepala'].'", "'.@$r['alamat'].'","'.@$r['desa'].'","'.@$r['kecamatan'].'","'.@$foto.'"]';
	}
}
?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDECMLwt8UyWPgkKVqEqf5QGFcqOsP6VKs&language=id"></script>
<script type="text/javascript">
    var Lokasi = [ <?= ($obj) ? implode(',',$obj) : ''; ?> ];

   function initialize() {
	   
      var map = new google.maps.Map(document.getElementById('peta'), {
         zoom: 12,
         center: {lat: <?php echo $profilku['t_propinsi_Latitude'];?>, lng: <?php echo $profilku['t_propinsi_Longitude'];?>},
         mapTypeId: google.maps.MapTypeId.roadmap,
         streetViewControl: true,
         mapTypeControl: false
      });

      var infowindow = new google.maps.InfoWindow();

      for (var i in Lokasi)
      {
         var p = Lokasi[i];
         var latlng = new google.maps.LatLng(p[0], p[1]);

        
		  var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: "<?= base_url('as_back/img/map.png'); ?>",
            title: p[2]
         });

         google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
            var contentString = '<div id="content">'+
                                '<h4 id="firstHeading" class="firstHeading"><b>'+Lokasi[i][2]+'</b></a></h4>'+
                                '<h5 id="firstHeading" class="firstHeading">Alamat : '+Lokasi[i][3]+'</a></h5>'+
								'<h5 id="firstHeading" class="firstHeading">Kelurahan : '+Lokasi[i][4]+'</a></h5>'+
								'<h5 id="firstHeading" class="firstHeading">Kecamatan : '+Lokasi[i][5]+'</a></h5>'+
								'<div><img src="'+Lokasi[i][6]+'" width="310px" height="200px"></div>'+
                                 
                                '</div>';

               infowindow.setContent(contentString);
               infowindow.open(map, marker);
            }
         })(marker, i));
      }
      //map.fitBounds(bounds);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>

</html>