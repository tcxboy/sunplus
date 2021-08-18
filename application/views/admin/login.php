<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login SUNPLUS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login'); ?>/css/main.css">
<!--===============================================================================================-->

<link rel="stylesheet" href="<?= base_url('as_back/css/normalize.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('as_back/css/bootstrap.min.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('as_back/css/_hx_login.css'); ?>" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/login'); ?>/images/img-01.png');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" id="form_input" action="<?= site_url('admin/login/validasi'); ?>" method="post" onsubmit="$('#progress').show()">
					<div class="login100-form-avatar">
						<img  src="<?= base_url('as_back/img/logo-mini.png'); ?>" alt="AVATAR">
					</div>

					<span class="login100-form-title  p-b-20">
						<b>SUNPLUS</b><br>
					</span>
					

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="us" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pw" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							<i class="fa fa-sign-in"></i> &nbsp; Masuk Sekarang
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login'); ?>/vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login'); ?>/js/main.js"></script>
<?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>
<script type="text/javascript" src="<?= base_url('as_back/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('as_back/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
   $(".form-login").center();
   $(window).resize(function() {
      $(".form-login").center();
   });
   setTimeout(function() {
      $('.alert').fadeOut('slow',function() {
         $('.alert').alert('close');
      });
   }, 10000);
});

/* CENTER ELEMENTS IN THE SCREEN */
jQuery.fn.center = function() {
   this.css("position", "absolute");
   this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
      $(window).scrollTop()) + "px");
   this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
      $(window).scrollLeft()) + "px");
   return this;
}
</script>
</body>
</html>