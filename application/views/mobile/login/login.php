<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
<title>Sunplus</title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets_mobile');?>/img/favicon.html">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/feather.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/plugins/swiper/css/swiper.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets_mobile');?>/css/custom.css">
<style>
.hint.-danger {
    color: #db4635;
    background-color: rgba(219,70,53,.05);
}

.hint {
    margin: 0 0 30px;
    padding: 18px 25px;
    position: relative;
    color: #353a4d;
    background-color: rgba(2,111,211,.05);
    border-radius: 4px;
    font-size: 12px;
    line-height: 16px;
    text-align: left;
}
</style>
</head>
<body class="login">
<div class="main-wrapper">
	<div class="page-content for-window-height d-flex align-items-center justify-content-center">
		<div>
			<div class="list">
				<div class="back-btn">
					<a href="<?php echo base_url('mobile/public_dashboard');?>" class="back link">
						<i class=" feather-arrow-left"></i>
					</a>
				</div>
				<form action="<?php echo base_url('mobile/login/validasi');?>" method="post">
					<div class="login-inner-col">
						<div class="top-title">
							<div>
								<h3>Login</h3>
								<h6>Access to our dashboard</h6>

							</div>
						</div>
						<ul class="pt-5">
							<li>
								<?php if(@$error){?>
									<div class="hint -danger"><?php echo @$error;?></div>
								<?php } ?>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Username" name="us">
								</div>
							</li>
							<li>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" name="pw">
								</div>
							</li>
							<li>
								<div class="form-group">
									<button type="submit" class="btn btn-submit btn-primary w-100">Login</button>
								</div>
							</li>
							<li>
								<div class="form-group forgot-password">
									<a href="forgot-password.html">Lupa Password ?</a>
								</div>
							</li>
						</ul>
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">atau</span>
						</div>
						<div class="social-login d-flex align-items-center justify-content-center"></div>
						<div class="text-center dont-have mt-4">Belum punya akun? <a href="register.html">Daftar</a></div>
					</div>
				</form>
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

<!-- Mirrored from mentoring-mobile.dreamguystech.com/bootstrap4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:38:58 GMT -->
</html>
