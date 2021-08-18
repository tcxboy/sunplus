<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo @$_judul;?> - SUNPLUS</title>

		<meta name="description" content="Mailbox with some customizations as described in docs" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		 <link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/lib');?>/main.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/animate.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/font-awesome.min.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/summernote.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/datepicker3.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/bootstrap-timepicker.min.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/jquery.printarea.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/magnific-popup.css'); ?>" />
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/select2/select2.min.css'); ?>" />
	   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox'); ?>/jquery.fancybox.min.css">
	   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/_hx_back.css'); ?>" />
	   <link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link href="<?php echo base_url('assets/slim');?>/slim/slim.min.css" rel="stylesheet">
		

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url('assets/tema');?>/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script type="text/javascript" src="<?= base_url('as_back/js/jquery-2.1.3.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace-extra.js"></script>
		<script src="<?= base_url('as_back/js/paginga.jquery.js');?>"></script>
		
		<link href="<?php echo base_url('as_back/file_input');?>/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url('as_back/file_input');?>/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
		<script src="<?php echo base_url('as_back/file_input');?>/js/plugins/piexif.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/js/plugins/sortable.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/js/fileinput.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/js/locales/fr.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/js/locales/es.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/themes/fas/theme.js" type="text/javascript"></script>
		<script src="<?php echo base_url('as_back/file_input');?>/themes/explorer-fas/theme.js" type="text/javascript"></script>	
		<script type="text/javascript" src="<?= base_url('assets/ck/build/ckeditor.js'); ?>"></script>
		<link href="<?= base_url('assets/froala/css/froala_editor.pkgd.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/froala/css/hide-froala-license.css'); ?>" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?= base_url('assets/froala/js/froala_editor.pkgd.min.js'); ?>"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/respond.js"></script>
		<![endif]-->
		 <style>
			
			.pager {
				margin: 0px 0;
			}
			
			.pager div
			{
				float: left;
				border: 1px solid gray;
				margin: 5px;
				padding: 10px;
			}

			.pager div.disabled
			{
				opacity: 0.25;
			}

			.pager .pageNumbers a
			{
				display: inline-block;
				padding: 0 10px;
				color: gray;
			}

			.pager .pageNumbers a.active
			{
				color: orange;
			}

			.pager 
			{
				
				overflow: hidden;
			}

			.paginate-no-scroll .items div
			{
				height: 250px;
			}
			.mb-4, .my-4 {
				margin-bottom: 1.5rem!important;
			}
			.paging { padding: 10px 10px 8px 14px; min-height: 50px; }
			.paging span { margin: 3px 0 0 0; display: inline-block; font-size: 15px; font-weight: 100; color: #333; }
			.pagination { border-radius: 0; }
			.pagination .fa-lg { line-height: 0.50em }
			.pagination>li>a, .pagination>li>span { color: #186B8C; }
			.pagination-sm>li:first-child>a, .pagination-sm>li:first-child>span { border-radius: 0; }
			.pagination-sm>li:last-child>a, .pagination-sm>li:last-child>span { border-radius: 0; }
			.pagination-sm { margin: 0; }
			.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus { background-color: #26677D; border-color: #26677D; color: #fff; }
			.panelcari
			{
			display:none;
			}
			
			.btn-circle {
			  width: 30px;
			  height: 30px;
			  text-align: center;
			  padding: 6px 0;
			  font-size: 12px;
			  line-height: 1.428571429;
			  border-radius: 15px;
			}
			.btn-circle.btn-lg {
			  width: 50px;
			  height: 50px;
			  padding: 10px 16px;
			  font-size: 18px;
			  line-height: 1.33;
			  border-radius: 25px;
			}
			.btn-circle.btn-xl {
			  width: 70px;
			  height: 70px;
			  padding: 10px 16px;
			  font-size: 24px;
			  line-height: 1.33;
			  border-radius: 35px;
			}
			.note-editor .btn-toolbar button[data-event="showImageDialog"] {
				display: none !important;
			}

			.note-editor .btn-toolbar button[data-event="showVideoDialog"] {
				display: none !important;
			}
			
			 .note-editor .btn-toolbar button[data-name="fontname"] {
				display: none !important;
			}
			
		</style>
	</head>

	<body class="no-skin" style="overflow-x:hidden">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<img src="<?= base_url(''); ?>/assets/images/logo.png" alt="" height="25">
							SUNPLUS <small class="hidden-xs"></small>
							
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="blue">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important jml_notif_outbox">0</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-blue dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									<span class="jml_notif_outbox">0</span> Pemeberitahuan
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink" id="notif_outbox">
										
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="<?php echo base_url('admin/notif');?>">
										Lihat Semua pemberitahuan
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

					

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?= base_url('as_back/foto_profil/'.$this->us['foto'].''); ?>" alt="" style="width:40px;height:40px" />
								<span class="user-info">
									<small>Admin</small>
									<?php echo  $this->us['t_user_nm'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#" data-toggle="modal" data-target="#modal_pass">
										<i class="ace-icon fa fa-cogs"></i>
										Edit Profil
									</a>
								</li>
<!--
								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>
-->
								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url('admin/login/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php if($this->uri->segment(2) == 'home'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/home');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'spj'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/spj');?>">
							<i class="menu-icon fa fa-truck"></i>
							<span class="menu-text">Pengiriman (SPJ)</span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'Stok'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/Stok');?>">
							<i class="menu-icon fa fa-inbox"></i>
							<span class="menu-text"> Stok</span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="<?php if($this->uri->segment(2) == 'toko'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/toko');?>">
							<i class="menu-icon fa fa-university"></i>
							<span class="menu-text"> Toko </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'reedem'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/reedem');?>">
							<i class="menu-icon fa fa-ticket  "></i>
							<span class="menu-text"> Reedem Poin </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'chat'){ echo 'active';} ?>">
						<a href="<?php echo base_url('admin/outbox');?>">
							<i class="menu-icon fa fa-comment"></i>
							<span class="menu-text"> Chat </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="<?php if($this->uri->segment(2) == 'rekap'){ echo 'active';} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-th-list"></i>
							<span class="menu-text"> Rekap </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							

							<li class="<?php if($this->uri->segment(2) == 'master_stok'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/rekap_surat_masuk');?>">
									<i class="menu-icon fa fa-inbox"></i>
									Master Stok
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($this->uri->segment(2) == 'stok_toko'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/rekap_surat_masuk');?>">
									<i class="menu-icon fa fa-inbox"></i>
									Stok Toko
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($this->uri->segment(2) == 'poin'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/rekap_surat_keluar');?>">
									<i class="menu-icon fa fa-paper-plane"></i>
									Poin Enduser
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php if($this->uri->segment(2) == 'user'){ echo 'active';} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Manajemen User </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							

							<li class="<?php if($this->uri->segment(2) == 'verifikasi_user'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/verifikasi_user');?>">
									<i class="menu-icon fa fa-inbox"></i>
									Verifikasi User
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($this->uri->segment(2) == 'referensi_user'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_user');?>">
									<i class="menu-icon fa fa-inbox"></i>
									Semua User
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				
					<li class="<?php if($this->uri->segment(2) == 'referensi_pegawai' || $this->uri->segment(2) == 'referensi_Jabatan'|| $this->uri->segment(2) == 'referensi_bagian'  || $this->uri->segment(2) == 'referensi_instansi' || $this->uri->segment(2) == 'referensi_inbox_status' || $this->uri->segment(2) == 'referensi_jenis_outbox' || $this->uri->segment(2) == 'referensi_outbox_status' ||$this->uri->segment(2) == 'referensi_lajur_disposisi' || $this->uri->segment(2) == 'referensi_setting_aplikasi'){ echo 'active open';} ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tags"></i>
							<span class="menu-text">
								Referensi
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							
							<li class="<?php if($this->uri->segment(2) == 'referensi_produk'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_produk');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Produk
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'referensi_kategori_produk'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_kategori_produk');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kategori Produk
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'referensi_reward_poin'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_reward_poin');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Reward Poin
								</a>

								<b class="arrow"></b>
							</li>

							

							<!--<li class="<?php //if($this->uri->segment(2) == 'referensi_propinsi'){ echo 'active';} ?>">
								<a href="<?php //echo base_url('admin/referensi_propinsi');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Propinsi
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php //if($this->uri->segment(2) == 'referensi_kabupaten'){ echo 'active';} ?>">
								<a href="<?php //echo base_url('admin/referensi_kabupaten');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kabupaten
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php //if($this->uri->segment(2) == 'referensi_kecamatan'){ echo 'active';} ?>">
								<a href="<?php //echo base_url('admin/referensi_kecamatan');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Kecamatan
								</a>

								<b class="arrow"></b>
							</li>-->
							
							
							
							<li class="<?php if($this->uri->segment(2) == 'referensi_pengukuran'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_pengukuran');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									 Pengukuran
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="<?php if($this->uri->segment(2) == 'referensi_expired'){ echo 'active';} ?>">
								<a href="<?php echo base_url('admin/referensi_expired');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									 Tanggal Expired
								</a>

								<b class="arrow"></b>
							</li>
							

							
						</ul>
					</li>
					
				

				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
						<?php if(@$_judul == 'Dashboard'){?>
								<li>
									<i class="ace-icon fa fa-home home-icon"></i>
									<a href="#"><?php echo @$_judul;?></a>
								</li>
						<?php }else{?>
								<li>
									<i class="ace-icon fa fa-home home-icon"></i>
									<a href="#">Dashboard</a>
								</li>
								<li class="active"><?php echo @$_judul;?></li>
						<?php } ?>
						
						<?php if(@$_judul2){?>
								<li class="active"><?php echo @$_judul2;?></li>
						<?php } ?>
						
							
						</ul><!-- /.breadcrumb -->

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>
					<div class="page-content">
						
						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								<?php echo @$_judul;?>
								
							</h1>
						</div><!-- /.page-header -->
					<!-- /section:basics/content.breadcrumbs -->
					 <?= $_konten; ?>
					<!-- /.page-content -->
					<!--
					<div class="footer">
					<div class="footer-inner">
						<div class="footer-content">
							<span class="bigger-120">
								&copy; Copyright 2021 <span class="blue bolder">Sunplus </span>
								
							</span>
						</div>
					</div>
					</div>-->
				</div>
				</div>
				
			</div><!-- /.main-content -->
			
				
			
			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
   <div id="modal-layout" class="modal modalxx" data-backdrop="static"></div>

   <div id="load-animasi" class="animasi-backdrop" style="display: none">
      <div class="animation-besar">
         <div class="bar bar1"></div><div class="bar bar2"></div><div class="bar bar3"></div><div class="bar bar4"></div><div class="bar bar5"></div>
         <p><small>Mohon tunggu...</small></p>
      </div>
   </div>
	<div class="modal fade" id="generatenomor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <form method="post" action="<?php echo base_url('admin/outbox/kirim_surat');?>">
		  <input type="hidden" name="id_outbox" id="id_outboxval"/>
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel">Kirim Surat</h4>
		  </div>
		  <div class="modal-body">
			
			  <div class="form-group">
				<label for="exampleInputEmail1">Nomor Surat</label>
				<input type="text" class="form-control" readonly id="nomorsurat" name="nomorsurat" placeholder="Nomor Surat">
			  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			<button type="submit" class="btn btn-primary">Kirim</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<div class="modal fade" id="modal_pass" tabindex="-1" role="dialog">
	<form id="form_input" action="<?php echo base_url('admin/aksi/ganti_password');?>" method="post" class="fv-form fv-form-bootstrap" novalidate="novalidate" enctype="multipart/form-data">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  
		  <div class="modal-body">
			<b>Setting akun</b><br/>
			
			<div class="slim"  data-ratio="0">
														<?php if(@$this->us['foto']){?>
															<img src="<?= base_url('as_back/foto_profil/'.$this->us['foto'].''); ?>" alt=""/>
														<?php } ?>
														<input type="file" id="unggah1" name="foto" />
													</div>
									
			<div class="form-group"><label for="" class=" control-label">Email</label><input type="email" name="email" id="" value="<?php echo @$this->us['username'];?>" class="form-control" data-original-title="" title=""></div>
		  
			<div class="form-group"><label for="" class=" control-label">Nomor WA</label><input type="number" name="wa" id="" value="<?php echo @$this->us['wa'];?>" class="form-control" data-original-title="" title=""></div>
		 
			<div class="form-group"><label for="" class=" control-label">Kata Sandi</label><input type="password" name="password" id="password" value="" class="form-control" data-original-title="" title=""></div>
			<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Batal</button>
			<button type="submit" class="btn btn-primary  pull-right">Simpan</button>
		  </div>
		  
		</div><!-- /.modal-content -->
	 
	  </div>
	  </div>
	 </form>
	</div>	
   <?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>
	
		<script type="text/javascript">
		$(document).ready(function(){
			$('.modal').on('hidden.bs.modal', function () {
 location.reload();
})
			
			
			
			$('.select').select2();
			$(".select-tags").select2({
			  tags: true
			});
			$(".select-tags").on("select2:select", function (evt) {
              var element = evt.params.data.element;
              var $element = $(element);
              
              $element.detach();
              $(this).append($element);
              $(this).trigger("change");
            });
			
			$("[data-fancybox]").fancybox({
				iframe : {
					css : {
						width : '600px'
					}
				}
			});
			
			
			$(document).ready(function(){
				$(".flip").click(function(){
				$(".panelcari").toggle();
				});
			})
		});
		</script>
		
		
		
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url('assets/tema');?>/assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url('assets/tema');?>/assets/js/bootstrap-tag.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/jquery.hotkeys.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/bootstrap-wysiwyg.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url('assets/lib');?>/main.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.scroller.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.colorpicker.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.typeahead.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.wysiwyg.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.spinner.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.treeview.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.wizard.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/elements.aside.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.ajax-content.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.touch-drag.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.sidebar.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.submenu-hover.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.widget-box.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.settings.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.settings-rtl.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.settings-skin.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="<?php echo base_url('assets/tema');?>/assets/js/ace/ace.searchbox-autocomplete.js"></script>
		
		
       <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-datepicker.id.js'); ?>"></script>
       <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-timepicker.min.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/select2/select2.full.min.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/alphanumeric.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/autoNumeric.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/summernote.min.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/jquery.printarea.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/jquery.magnific-popup.min.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/_form.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/_script.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/highcharts.js'); ?>"></script>
	   <script type="text/javascript" src="<?= base_url('as_back/js/exporting.js'); ?>"></script>
	   <script src="<?= base_url(''); ?>/assets/fancybox/jquery.fancybox.min.js"></script>
	   <link type="text/css" href="<?= base_url('as_back/css/jquery.countdown.css?v=1.0.0.0');?>" rel="stylesheet">
		<script type="text/javascript" src="<?= base_url('as_back/js/jquery.countdown.min.js?v=1.0.0.0');?>"></script>		
		<script src="<?php echo base_url('assets/slim');?>/slim/slim.kickstart.min.js"></script>
		<script src="<?php echo base_url('assets/slim');?>/scripts/scripts.js"></script>

		<!-- inline scripts related to this page -->
			
		<script type="text/javascript">
		$(function () {
		  $('#crt').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: 'Grafik  2021'
			},
			subtitle: {
				text: 'SUNPLUS'
			},
			xAxis: {
				type: 'category',
				labels: {
					rotation: -45,
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif'
					}
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Nama Satuan'
				}
			},
			legend: {
				enabled: false
			},
			tooltip: {
				pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
			},
			series: [{
				name: 'Population',
				data: [
					['Januari', 24.2],
					['Febuari', 20.8],
					['Maret', 14.9],
					['April', 13.7],
					['Mei', 13.1],
					['Juni', 12.7],
					['Juli', 12.4],
					['Agustus', 12.2],
					['September', 12.0],
					['November', 11.7],
					['Desember', 11.5]
					
				],
				dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					format: '{point.y:.1f}', // one decimal
					y: 10, // 10 pixels down from the top
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif'
					}
				}
			}]
		});
		});
		$(document).ready(function(){
			
			 $("#t_propinsi_id").change(function(){
				
				  var kode = $(this).val();
				  $.ajax({
					 type: "POST",
					 url : "<?php echo site_url("admin/aksi/pilih_kabupaten");?>",
					 data: "propinsi_id="+kode,
					 success: function(list){
						$("#t_kab_id").html(list);
					 }
				  });
			   });			  
			   $("#t_kab_id").change(function(){
				  
				  var kode = $(this).val();
				  $.ajax({
					 type: "POST",
					  url : "<?php echo site_url("admin/aksi/pilih_kecamatan");?>",
					 data: "t_kab_id="+kode,
					 success: function(list){
						$("#t_kec_id").html(list);
					 }
				  });
			   });
			
			
			
			 $('.jam').timepicker({defaultTime: false, minuteStep: 5, showInputs: false, showMeridian: false });
			$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
			
			 //setInterval(function(){
				
				 $.ajax({
						type: "POST",
						url : "<?php echo site_url("admin/aksi/get_jml_notif_outbox");?>",
						data: "",
						success: function(data){
							$(".jml_notif_outbox").html(data);
						}
				 });
				 $.ajax({
						type: "POST",
						url : "<?php echo site_url("admin/aksi/get_notif_outbox");?>",
						data: "",
						success: function(data){
							$("#notif_outbox").html(data);
						}
				 });
			// }, 2000);
			 
			 
				
							   
		});
			
			
			
			
		</script>

		
	</body>
</html>
