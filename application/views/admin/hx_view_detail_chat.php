<style type="text/css">


h2 {
    clear: both;
    font-size: 1.8em;
    margin-bottom: 10px;
    padding: 10px 0 10px 30px;
}

h3 > span {
    border-bottom: 2px solid #C2C2C2;
    display: inline-block;
    padding: 0 5px 5px;
}

/* USER PROFILE */
#user-profile h2 {
    padding-right: 15px;
}
#user-profile .profile-status {
	font-size: 0.75em;
	padding-left: 12px;
	margin-top: -10px;
	padding-bottom: 10px;
	color: #8dc859;
}
#user-profile .profile-status.offline {
	color: #fe635f;
}
#user-profile .profile-img {
	border: 1px solid #e1e1e1;
	padding: 4px;
	margin-top: 10px;
	margin-bottom: 10px;
}
#user-profile .profile-label {
	text-align: center;
	padding: 5px 0;
}
#user-profile .profile-label .label {
	padding: 5px 15px;
	font-size: 1em;
}
#user-profile .profile-stars {
	color: #FABA03;
	padding: 7px 0;
	text-align: center;
}
#user-profile .profile-stars > i {
	margin-left: -2px;
}
#user-profile .profile-since {
	text-align: center;
	margin-top: -5px;
}
#user-profile .profile-details {
	padding: 15px 0;
	border-top: 1px solid #e1e1e1;
	border-bottom: 1px solid #e1e1e1;
	margin: 15px 0;
}
#user-profile .profile-details ul {
	padding: 0;
	margin-top: 0;
	margin-bottom: 0;
	margin-left: 40px;
}
#user-profile .profile-details ul > li {
	margin: 3px 0;
	line-height: 1.5;
}
#user-profile .profile-details ul > li > i {
	padding-top: 2px;
}
#user-profile .profile-details ul > li > span {
	color: #34d1be;
}
#user-profile .profile-header {
	position: relative;
}
#user-profile .profile-header > h3 {
	margin-top: 10px
}
#user-profile .profile-header .edit-profile {
	margin-top: -6px;
	position: absolute;
	right: 0;
	top: 0;
}
#user-profile .profile-tabs {
	margin-top: 30px;
}
#user-profile .profile-user-info {
	padding-bottom: 20px;
}
#user-profile .profile-user-info .profile-user-details {
	position: relative;
	padding: 4px 0;
}
#user-profile .profile-user-info .profile-user-details .profile-user-details-label {
	width: 110px;
	float: left;
	bottom: 0;
	font-weight: bold;
	left: 0;
	position: absolute;
	text-align: right;
	top: 0;
	width: 110px;
	padding-top: 4px;
}
#user-profile .profile-user-info .profile-user-details .profile-user-details-value {
	margin-left: 120px;
}
#user-profile .profile-social li {
	padding: 4px 0;
}
#user-profile .profile-social li > i {
	padding-top: 6px;
}
@media only screen and (max-width: 767px) {
	#user-profile .profile-user-info .profile-user-details .profile-user-details-label {
		float: none;
		position: relative;
		text-align: left;
	}
	#user-profile .profile-user-info .profile-user-details .profile-user-details-value {
		margin-left: 0;
	}
	#user-profile .profile-social {
		margin-top: 20px;
	}
}
@media only screen and (max-width: 420px) {
	#user-profile .profile-header .edit-profile {
		display: block;
		position: relative;
		margin-bottom: 15px;
	}
	#user-profile .profile-message-btn .btn {
		display: block;
	}
}


.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    padding: 20px;
}
.main-box h2 {
    margin: 0 0 15px -20px;
    padding: 5px 0 5px 20px;
    border-left: 10px solid #c2c2c2; /*7e8c8d*/
}

.btn {
    border: none;
	padding: 6px 12px;
	border-bottom: 4px solid;
	-webkit-transition: border-color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s;
	transition: border-color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s;
	outline: none;
}
.btn-default,
.wizard-cancel,
.wizard-back {
	background-color: #7e8c8d;
	border-color: #626f70;
	color: #fff;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active, 
.open .dropdown-toggle.btn-default,
.wizard-cancel:hover,
.wizard-cancel:focus,
.wizard-cancel:active,
.wizard-cancel.active,
.wizard-back:hover,
.wizard-back:focus,
.wizard-back:active,
.wizard-back.active {
	background-color: #949e9f;
	border-color: #748182;
	color: #fff;
}
.btn-default .caret {
	border-top-color: #FFFFFF;
}
.btn-info {
	background-color: #5daee7;
	border-color: #4c95c9;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active, 
.open .dropdown-toggle.btn-info {
	background-color: #4c95c9;
	border-color: #3f80af;
}
.btn-link {
	border: none;
}
.btn-primary {
	background-color: #3fcfbb;
	border-color: #2fb2a0;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active, 
.open .dropdown-toggle.btn-primary {
	background-color: #38c2af;
	border-color: #2aa493;
}
.btn-success {
	background-color: #8dc859;
	border-color: #77ab49;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active, 
.open .dropdown-toggle.btn-success {
	background-color: #77ab49;
}
.btn-danger {
	background-color: #fe635f;
	border-color: #dd504c;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active, 
.open .dropdown-toggle.btn-danger {
	background-color: #dd504c;
}
.btn-warning {
	background-color: #f1c40f;
	border-color: #d5ac08;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active, 
.open .dropdown-toggle.btn-warning {
	background-color: #e0b50a;
	border-color: #bd9804;
}

.icon-box {
	
}
.icon-box .btn {
	border: 1px solid #e1e1e1;
	margin-left: 3px;
	margin-right: 0;
}
.icon-box .btn:hover {
	background-color: #eee;
	color: #2BB6A3;
}

a {
    color: #2bb6a3;
	outline: none !important;
}
a:hover,
a:focus {
	color: #2bb6a3;
}



.daterange-filter {
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #CCCCCC;
	cursor: pointer;
	padding: 5px 10px;
}
.filter-block .form-group {
	margin-right: 10px;
	position: relative;
}
.filter-block .form-group .form-control {
	height: 36px;
}
.filter-block .form-group .search-icon {
	position: absolute;
	color: #707070;
	right: 8px;
	top: 11px;
}
.filter-block .btn {
	margin-left: 5px;
}
@media only screen and (max-width: 440px) {
	.filter-block {
		float: none !important;
		clear: both
	}
	.filter-block .form-group {
		float: none !important;
		margin-right: 0;
	}
	.filter-block .btn {
		display: block;
		float: none !important;
		margin-bottom: 15px;
		margin-left: 0;
	}
	#reportrange {
		clear: both;
		float: none !important;
		margin-bottom: 15px;
	}
}


.tabs-wrapper .tab-content {
    margin-bottom: 20px;
    padding: 0 10px;
}

/* RECENT - USERS */
.widget-users {
    list-style: none;
	margin: 0;
	padding: 0;
}
.widget-users li {
	border-bottom: 1px solid #ebebeb;
	padding: 15px 0;
	height: 96px;
}
.widget-users li > .img {
	float: left;
	margin-top: 8px;
	width: 50px;
	height: 50px;
	overflow: hidden;
	border-radius: 50%;
}
.widget-users li > .details {
	margin-left: 60px;
}
.widget-users li > .details > .name {
	font-weight: 600;
}
.widget-users li > .details > .name > a {
	color: #344644;
}
.widget-users li > .details > .name > a:hover {
	color: #2bb6a3;
}
.widget-users li > .details > .time {
	color: #2bb6a3;
	font-size: 0.75em;
	padding-bottom: 7px;
}
.widget-users li > .details > .time.online {
	color: #8dc859;
}


/* CONVERSATION */
.conversation-inner {
    padding: 0 0 5px 0;
	margin-right: 10px;
}
.conversation-item {
	padding: 5px 0;
	position: relative;
}
.conversation-user {
	width: 50px;
	height: 50px;
	overflow: hidden;
	float: left;
	border-radius: 50%;
	margin-top: 6px;
}
.conversation-body {
	background: #f5f5f5;
	font-size: 0.875em;
	width: auto;
	margin-left: 60px;
	padding: 8px 10px;
	position: relative;
}
.conversation-body:before {
	border-color: transparent #f5f5f5 transparent transparent;
	border-style: solid;
	border-width: 6px;
	content: "";
	cursor: pointer;
	left: -12px;
	position: absolute;
	top: 25px;
}
.conversation-item.item-right .conversation-body {
	background: #dcfffa;
}
.conversation-item.item-right .conversation-body:before {
	border-color: transparent transparent transparent #dcfffa;
	left: auto;
	right: -12px;
}
.conversation-item.item-right .conversation-user {
	float: right;
}
.conversation-item.item-right .conversation-body {
	margin-left: 0;
	margin-right: 60px;
}
.conversation-body > .name {
	font-weight: 600;
	font-size: 1.125em;
}
.conversation-body > .time {
	position: absolute;
	font-size: 0.875em;
	right: 10px;
	top: 0;
	margin-top: 10px;
	color: #605f5f;
	font-weight: 300;
}
.conversation-body > .time:before {
	content: "\f017";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-top: 4px;
	font-size: 0.875em;
}
.conversation-body > .text {
	padding-top: 6px;
}
.conversation-new-message {
	padding-top: 10px;
}

textarea.form-control {
    height: auto;
}
.form-control {
    border-radius: 0px;
    border-color: #e1e1e1;
    box-shadow: none;
    -webkit-box-shadow: none;
}

    </style>

<!-- Judul Halaman -->
<div class="row wrapper white-bg page-heading">
   <div class="head-konten">
      <h3><i class="fa fa-folder-open fa-fw"></i> <?= $_judul; ?></h3>
	</div>
</div>

<!-- Konten Halaman -->
<div class="wrapper wrapper-content">


   <div class="">
    
    <div class="row" id="user-profile">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h2><?php echo $_data[0]['nama'];?></h2>
                
                <img src="<?php if($_data[0]['foto'] != null ){ echo base_url('foto/'.$_data[0]['foto'].''); }else{ echo base_url('foto/unknown.jpg');}?>" alt="" class="profile-img img-responsive center-block">
                <div class="profile-label">
                    <span class="label label-danger">User</span>
                </div>

                <div class="profile-stars">
                  <span></span>
                </div>

                <div class="profile-since">
                    Member dari: <?php echo hx_tgl($_data[0]['tgl_daftar']);?>
                </div>

                
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>User info</span></h3>
                   
                </div>

                <div class="row profile-user-info">
                    <div class="col-sm-6">
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Nama
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['nama'];?>
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Kode Responden
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['kd_koresponden'];?>
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Umur
                            </div>
                            <div class="profile-user-details-value">
								<?php echo $_data[0]['umur'];?>
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Agama
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['agama'];?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 profile-social">
						<div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Pendidikan
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['pendidikan'];?>
                            </div>
                        </div>
						<div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Pekerjaan
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['pekerjaan'];?>
                            </div>
                        </div>
						<div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Istri Hamil Ke
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['istri_hamil_ke'];?>
                            </div>
                        </div>
						<div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                               Usia Kehamilan Istri
                            </div>
                            <div class="profile-user-details-value">
                                <?php echo $_data[0]['usia_kehamilan_istri'];?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs-wrapper profile-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-activity" data-toggle="tab">Hasil Quisioner</a></li>
                        <li><a href="#tab-chat" data-toggle="tab">Pertanyaan  </a></li>
                    </ul>

                    <div class="tab-content">
						<br/>
                        <div class="tab-pane fade in active" id="tab-activity">
							<p>PRA KUISIONER</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">
												No
                                            </th>
                                            <th>
                                               Pertanyaan
                                            </th>
                                            <th class="text-center"width="10%">
                                               B 
                                            </th>
											<th class="text-center" width="10%">
                                               S
                                            </th>
                                        </tr>
                                    </thead>
									<tbody>
									<?php if($pra_k){
										$no=0;
										foreach($pra_k as $rw){$no++;
									?>
                                        <tr>
                                            <td class="text-center">
												<?php echo $no;?>
                                            </td>
                                            <td>
                                               <?php echo $rw['isi_kuisioner'];?>
                                            </td>
                                            <td class="text-center">
                                               <?php if($rw['jawaban']=='B'){ echo 'V';}?>
                                            </td>
											<td class="text-center">
                                               <?php if($rw['jawaban']=='S'){ echo 'V';}?>
                                            </td>
                                        </tr>
									<?php }} ?>
                                    </tbody>
                                </table>
                            </div>
							<p>POST KUISIONER</p>
							 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">
												No
                                            </th>
                                            <th>
                                               Pertanyaan
                                            </th>
                                            <th class="text-center"width="5%">
                                              SS
                                            </th>
											<th class="text-center" width="5%">
                                               S
                                            </th>
											<th class="text-center" width="5%">
                                               RG
                                            </th>
											<th class="text-center" width="5%">
                                               TS
                                            </th>
											<th class="text-center" width="5%">
                                               STS
                                            </th>
                                        </tr>
                                    </thead>
									<tbody>
                                       <?php if($post_k){
										$no=0;
										foreach($post_k as $rw){$no++;
									?>
                                        <tr>
                                            <td class="text-center">
												<?php echo $no;?>
                                            </td>
                                            <td>
                                               <?php echo $rw['isi_kuisioner'];?>
                                            </td>
                                            <td class="text-center">
                                               <?php if($rw['jawaban']=='SS'){ echo 'V';}?>
                                            </td>
											<td class="text-center">
                                               <?php if($rw['jawaban']=='S'){ echo 'V';}?>
                                            </td>
											<td class="text-center">
                                               <?php if($rw['jawaban']=='RG'){ echo 'V';}?>
                                            </td>
											<td class="text-center">
                                               <?php if($rw['jawaban']=='TS'){ echo 'V';}?>
                                            </td>
											<td class="text-center">
                                               <?php if($rw['jawaban']=='STS'){ echo 'V';}?>
                                            </td>
                                        </tr>
									<?php }} ?>
										 
                                    </tbody>
                                </table>
                            </div>

                        </div>

                       
                        <div class="tab-pane fade" id="tab-chat">
                            <div class="conversation-wrapper">
                                <div class="conversation-content">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 340px;">
                                        <div class="conversation-inner" style="overflow: scroll; width: auto; height: 340px;">
										<?php if($chat){
												foreach($chat as $ch){ 
												if($ch['send_by'] == $this->us['id_user']){
													$ar = 'right';
												}else{
													$ar = 'left';
												}
												?>
                                            <div class="conversation-item item-<?php echo @$ar;?> clearfix">
                                                <div class="conversation-user">
                                                    <img src="<?php if($ch['foto'] != null ){ echo base_url('foto/'.$ch['foto'].''); }else{ echo base_url('foto/unknown.jpg');}?>" class="img-responsive"  alt="">
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="name">
                                                        <?php echo $ch['nama'];?>
                                                    </div>
                                                    <div class="time hidden-xs">
                                                       <?php echo $ch['time'];?>
                                                    </div>
                                                    <div class="text">
                                                         <?php echo $ch['message'];?>
                                                    </div>
                                                </div>
                                            </div>
                                           
										<?php }} ?>
                                        </div>
                                        <div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div>
                                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                                    </div>
                                </div>
                                <div class="conversation-new-message">
                                    <form method="post" action="<?php echo base_url('admin/chat/kirim_chat');?>" id="form_chat">
                                        <div class="form-group">
											<input type="hidden" name="data[send_to]" value="<?php echo $id_user;?>" />
                                            <textarea class="form-control" id="message" rows="2" name="data[message]" placeholder="Ketikan pesan anda disini..."></textarea>
                                        </div>

                                        <div class="clearfix">
                                            <button type="button" class="btn btn-success pull-right" id="kirim_chat">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

   </div>
</div>
<script>
$(document).ready(function(){
setInterval(function(){
$(".conversation-inner").load('<?php echo base_url("admin/chat/get_chat/".$id_user."");?>')
}, 2000);
});

	$("#kirim_chat").click(function(){
		 var form = $('#form_chat');
         $.ajax( {
			  type: "POST",
			  url: form.attr( 'action' ),
			  data: form.serialize(),
			  success: function( response ) {
				$('#message').val('');
			  }
		});
     });
</script>