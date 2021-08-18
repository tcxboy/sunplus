<style type="text/css">
.select2-container { width: auto !important; }
#map-canvas {
  height: 100%;
}
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 360px;
}
#pac-input:focus {
  border-color: #4d90fe;
}
.pac-container {
  font-family: Roboto;
}
#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}
#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}
#target {
  width: 345px;
}
</style>

<!-- Judul Halaman -->


<!-- Konten Halaman -->
<div class="main-content">
   <div class="panel panel-default">
      <div class="panel-body">
         <form id="form_input" action="<?= site_url('admin/'.$this->_ctrl.'/simpan_peta'); ?>" method="post" class="form-inline form_csari">
            <input type="hidden" name="<?= $this->_kunci; ?>" value="<?= $result[$this->_kunci]; ?>">
            <div class="form-group" style="margin-right: 20px">
               <label for="lat">LATITUDE (Lintang) : </label>
               <input type="text" name="t_user_lat" id="latitude" class="form-control input-sm" style="padding: 2px 8px" required>
            </div>
            <div class="form-group">
               <label for="lat">LONGITUDE (Bujur) : </label>
               <input type="text" name="t_user_lng" id="longitude" class="form-control input-sm" style="padding: 2px 8px" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-sm btn-primary btn-progress"><i class="fa fa-check fa-fw"></i> SIMPAN</button>
            </div>
            <div class="pull-right">
               <button type="button" class="btn btn-info btn-sm" onclick="cariLokasi()">
                  <i class="fa fa-map-marker fa-fw fa-lg"></i> Deteksi Lokasi
               </button>
			   <a href="<?= site_url($this->_ctrl); ?>" class="btn btn-success btn-sm pull-right">
				 <i class="fa fa-arrow-left fa-lg fa-fw"></i> KEMBALI
			  </a>
            </div>
         </form>
      </div>
<div class="row">
   <div class="col-md-2">
   <?php if(@$result['t_user_foto'] == null){?>
      <img src="<?= base_url('foto/unknown.jpg');?>" width="160px" height="100px">
   <?php }else{ ?>
      <a href="<?= base_url('foto/'.@$result['t_user_foto']); ?>" class="media-foto galeri-pop" style="height: 160px;background-image: url('<?= base_url('foto/'.@$result['t_user_foto']); ?>')">  </a>
   <?php }?>
   </div>
   <div class="col-md-8">
      <div class="row">
        <div class="col-md-2">Nama</div>
        <div class="col-md-4">: <?= @$result['t_user_nm']; ?></div>
      </div>
	   <div class="row">
        <div class="col-md-2">No HP / No Telp</div>
        <div class="col-md-4">: <?= @$result['t_user_nohp']; ?> / <?= @$result['t_user_notelp']; ?></div>
      </div>
	   <div class="row">
        <div class="col-md-2">Email</div>
        <div class="col-md-4">: <?= @$result['t_user_email']; ?></div>
      </div>
	   <div class="row">
        <div class="col-md-2">Role/Level</div>
        <div class="col-md-4">: <?= @$result['t_user_level']; ?></div>
      </div>
      <div class="row">
        <div class="col-md-2">Alamat</div>
        <div class="col-md-4">: <?= @$result['t_user_alamat']; ?></div>
      </div>
	   <div class="row">
        <div class="col-md-2">Status Verifikasi</div>
        <div class="col-md-4">: <?= @$result['t_user_verifikasi']; ?></div>
      </div>
	  <div class="row">
        <div class="col-md-2">Status Aktif</div>
        <div class="col-md-4">: <?= @$result['t_user_aktif']; ?></div>
      </div>
      
   </div>
</div>
   <br/>
      <input id="pac-input" class="controls" type="text" placeholder="Ketikan nama tempat">
      <div id="map-canvas" style="height: 400px"></div>
   </div>
</div>

<?php
$zoom  = ($result['t_user_lat'] && $result['t_user_lng']) ? '18' : '12';
$titik = ($result['t_user_lat'] && $result['t_user_lng']) ? $result['t_user_lat'].','.$result['t_user_lng'] : ''.$result['t_propinsi_Latitude'].','.$result['t_propinsi_Longitude'].'';
?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDECMLwt8UyWPgkKVqEqf5QGFcqOsP6VKs&language=id&libraries=places&callback=initAutocomplete" async defer></script>
<script type="text/javascript">
   var map;
   var markers = [];

   function cariLokasi() {

      $("#load-animasi").fadeIn(200);

      // Try HTML5 geolocation.
      if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(pos) {

            var objek = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);

            var mapOptions = {
               zoom: 14,
               center: objek,
               mapTypeId: google.maps.MapTypeId.SATELLITE,
               streetViewControl: false,
               mapTypeControl: false
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

            alert("Lokasi ditemukan.");
            $("#load-animasi").hide();

            google.maps.event.addListener(map, 'click', function(event) {
               addMarker(event.latLng);
            });

            addMarker(objek);

         }, function() {
            alert("Gagal mendapatkan lokasi.");
         });

      } else {
         alert("Browser tidak mendukung geolocation.");
      }
   }

   function addMarker(lokasi) {
      $("#latitude").val(lokasi.lat());
      $("#longitude").val(lokasi.lng());

      //alert(lokasi);

      var marker = new google.maps.Marker({
         position: lokasi,
         map: map,
         icon: "<?= base_url('as_back/img/map.png'); ?>"
      });
      markers.push(marker);
   }

   function initAutocomplete() {

      var objek = new google.maps.LatLng(<?= $titik ?>);

      var mapOptions = {
         zoom: <?= $zoom ?>,
         center: objek,
         streetViewControl: false,
         mapTypeId: google.maps.MapTypeId.SATELLITE
      };

      map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

      <?= ($result['t_user_lat'] && $result['t_user_lng']) ? 'addMarker(objek);' : ''; ?>

      // Create the search box and link it to the UI element.
      var input = document.getElementById('pac-input');
      var searchBox = new google.maps.places.SearchBox(input);
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

      // Bias the SearchBox results towards current map's viewport.
      map.addListener('bounds_changed', function() {
         searchBox.setBounds(map.getBounds());
      });

      // Listen for the event fired when the user selects a prediction and retrieve
      // more details for that place.
      searchBox.addListener('places_changed', function() {
         var places = searchBox.getPlaces();

         if (places.length == 0) {
            return;
         }

         // Clear out the old markers.
         markers.forEach(function(marker) {
            marker.setMap(null);
         });
         markers = [];

         // For each place, get the icon, name and location.
         var bounds = new google.maps.LatLngBounds();
         places.forEach(function(place) {
            /*var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };*/

            // Create a marker for each place.
            /*markers.push(new google.maps.Marker({
              map: map,
              icon: "<?=base_url('as_back/img/map.png'); ?>",
              title: place.name,
              position: place.geometry.location
            }));*/

            addMarker(place.geometry.location);

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
         });
         map.fitBounds(bounds);
      });
      // [END region_getplaces]

      google.maps.event.addListener(map, 'click', function(event) {
         addMarker(event.latLng);
      });
   }
</script>