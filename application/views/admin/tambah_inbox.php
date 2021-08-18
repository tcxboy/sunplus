<div class="row" style="margin-bottom:50px">
							<div class="col-xs-12">
							<form action="<?php echo base_url('admin/inbox/simpan');?>" method="post" enctype="multipart/form-data">
							<input type="hidden" value="<?php echo @$data['id_inbox'];?>" name="id_inbox"/>
							 <div class="row">
								<div class="col-md-6">
									<div style="margin:10px;font-size:10pt">
												
												
												 <div class="form-group">
													<label for="exampleInputEmail1">Nomor Urut</label>
													<input type="text"  class="form-control" id="Nomor_Urut" name="data[Nomor_Urut]" value="<?php echo @$nomor_urut;?>">
												 </div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Nama Pengirim</label>
													<select class="form-controlx select-tags" id="Nama_Pengirim" name="data[Nama_Pengirim]" required>
													  <option value="" >Pilih</option>
													 <?php foreach($pengirim as $rw){ 
															if($rw['Nama_Pengirim'] != ''){
													 ?>
														 <option value="<?php echo @$rw['Nama_Pengirim'];?>" <?php if(@$rw['Nama_Pengirim'] == @$data['Nama_Pengirim']){ echo 'selected';};?>><?php echo strtoupper(@$rw['Nama_Pengirim']);?></option>
															<?php }} ?>
													</select>
												 </div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Alamat Pengirim</label>
													<textarea class="form-control" id="Alamat_Pengirim" rows="3" name="data[Alamat_Pengirim]"><?php echo @$data['Alamat_Pengirim'];?></textarea>
												 </div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Tanggal Penerimaan</label>
													<input type="text" class="form-control tgl" autocomplete="off" id="Tanggal_Penerimaan" name="data[Tanggal_Penerimaan]" value="<?php if(@$data['Tanggal_Penerimaan']){ echo hx_tgl_mysql_id(@$data['Tanggal_Penerimaan']); }?>">
												 </div>
												  <div class="form-group">
													<label for="exampleInputEmail1">Nomor Surat</label>
													<input type="text" class="form-control" id="Nomor_Surat" autocomplete="off" name="data[Nomor_Surat]" value="<?php echo @$data['Nomor_Surat'];?>">
												 </div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Tanggal Surat</label>
													<input type="text" class="form-control tgl" autocomplete="off" id="Tanggal_Surat" name="data[Tanggal_Surat]" value="<?php if(@$data['Tanggal_Surat']){echo hx_tgl_mysql_id(@$data['Tanggal_Surat']); }?>">
												 </div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Perihal Surat</label>
													<input type="text" class="form-control" id="Perihal_Surat" autocomplete="off" name="data[Perihal_Surat]" value="<?php echo @$data['Perihal_Surat'];?>">
												</div>
												 <div class="form-group">
													<label for="exampleInputEmail1">Lokasi Fisik</label>
													<select class="form-control select-tags" id="lokasi_fisik_id" name="data[lokasi_fisik_id]" required>
													  <option value="" >Pilih</option>
													 <?php foreach($lokasi_fisik as $rw){ ?>
														 <option value="<?php echo @$rw['lokasi_fisik_id'];?>" <?php if(@$rw['lokasi_fisik_id'] == @$data['lokasi_fisik_id']){ echo 'selected';};?>><?php echo strtoupper(@$rw['lokasi_fisik']);?></option>
													 <?php } ?>
													</select>
												 </div>
												 <br/>
												 <div class="form-group">
													<div class="widget-box ui-sortable-handle collapsed">
														<div class="widget-header">
															<h5 class="widget-title">Masukan ke Agenda</h5>

															<!-- #section:custom/widget-box.toolbar -->
															<div class="widget-toolbar">
																
																<a href="#" data-action="collapse">
																	<i class="ace-icon fa fa-chevron-down"></i>
																</a>
															</div>

															<!-- /section:custom/widget-box.toolbar -->
														</div>

														<div class="widget-body" style="display: none;">
															<div class="widget-main">
																<div class="form-group">
																	<label for="exampleInputEmail1">Tanggal Mulai</label>
																	<input type="text" class="form-control tgl" id="Tanggal_Mulai_Agenda" autocomplete="off" name="data[Tanggal_Mulai_Agenda]" value="<?php echo hx_tgl_mysql_id(@$data['Tanggal_Mulai_Agenda']);?>">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Tanggal Selesai</label>
																	<input type="text" class="form-control tgl" id="Tanggal_Selesai_Agenda" autocomplete="off" name="data[Tanggal_Selesai_Agenda]" value="<?php echo hx_tgl_mysql_id(@$data['Tanggal_Selesai_Agenda']);?>">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Jam</label>
																	<div class="row" style="padding-left: 6px;">
																		<div class="col-sm-3">
																			<input type="time" class="form-control" id="Jam_Mulai_Agenda" autocomplete="off" name="data[Jam_Mulai_Agenda]" value="<?php echo @$data['Jam_Mulai_Agenda'];?>">
																		</div>
																		<div class="col-sm-3">
																			<input type="time" class="form-control" id="Jam_Selesai_Agenda" autocomplete="off" name="data[Jam_Selesai_Agenda]" value="<?php echo @$data['Jam_Selesai_Agenda'];?>">
																		</div>
																	</div>
																	
																	
																</div>
																<div class="form-group">
																<label for="exampleInputEmail1">Acara / Kegiatan</label>
																	<input type="text" class="form-control" id="Acara_Agenda"  autocomplete="off" name="data[Acara_Agenda]" value="<?php echo @$data['Acara_Agenda'];?>">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Tempat</label>
																	<input type="text" class="form-control" id="Tempat_Agenda"  autocomplete="off" name="data[Tempat_Agenda]" value="<?php echo @$data['Tempat_Agenda'];?>">
																</div>
																
																<div class="form-group">
																	<label for="exampleInputEmail1">Catatan Agenda</label>
																	<textarea class="form-control   editor-mini" id="Catatan_Agenda" rows="3" name="data[Catatan_Agenda]"><?php echo @$data['Catatan_Agenda'];?></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
												
										
										</div>
								</div>
								<div class="col-md-6">
										<div style="margin:10px;font-size:10pt">
											    
												<div class="form-group">
													<label for="exampleInputEmail1">Ringkasan</label>
													<textarea class="form-control   editor-mini" id="isi" rows="3" name="data[Ringkasan]"><?php echo @$data['Ringkasan'];?></textarea>
												</div>
												<div class="form-group">
													<label for="exampleFormControlSelect1">Kepada</label>
													<select class="form-control select" id="id_pegawai" name="data[id_pegawai]" required>
													  <option value="">Pilih</option>
													 <?php foreach($pegawai as $rw){ ?>
														 <option value="<?php echo @$rw['pegawai_id'];?>" <?php if(@$rw['pegawai_id'] == @$id_pegawai || @$rw['pegawai_id'] == @$data['id_pegawai']){ echo 'selected';};?>><?php echo @$rw['pegawai_nama'].' - '.@$rw['Nama_Jabatan'];?></option>
													 <?php } ?>
													</select>
												</div>
												
												 <div class="form-group">
													<label for="exampleInputEmail1">Upload File Naskah</label>
													<input id="file-1" name="dokumen[]"  type="file" multiple class="file" data-overwrite-initial="false"  data-theme="fas">
													
												</div>
											  <button type="submit" class="btn btn-white btn-info btn-bold"><i class="fa fa-save"></i> Simpan</button>
											  <a href="<?php echo base_url('admin/inbox/index');?>" class="btn btn-white btn-warning btn-bold"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
											
										</div>
								</div>
							 </div>
                           </form>
                        </div>
                 
                </div>

       
<script type="text/javascript">
   $(document).ready(function(){
      $(".tombol-hapus-file").click(function(){
		
         $(".link-hapus-file").attr("href",$(this).attr("url"));
      });
   });
</script> 



<script type="text/javascript"> 
$("#file-1").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-xs",
		removeClass : "btn btn-default btn-xs",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
		<?php if(@$docupload){?>
			initialPreview: [
				<?php foreach($docupload as $file){ ?>
					"<?php echo base_url('as_back/uploads/inbox/'.$file['File'].'');?>",
				<?php } ?>
			],
			 initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
			 initialPreviewFileType: 'image', // image is the default and can be overridden in config below
			 initialPreviewDownloadUrl: '<?php echo base_url('as_back/uploads/inbox');?>/{filename}',
			 initialPreviewConfig: [
				<?php foreach($docupload as $file){ 
					if($file['ext'] == '.doc' || $file['ext'] == '.docx'){
						$typefile = 'office';
					}else if($file['ext'] == '.pdf'){
						$typefile = 'pdf';
					}
				
				?>
					{<?php if(@$typefile){ ?>type: "<?php echo $typefile;?>",<?php } ?>caption: "<?php echo $file['File'];?>", size: 0, width: "60px", url: "<?php echo base_url('admin/inbox/delete_file/'.$file['id_inbox_dok'].'/'.$file['id_inbox'].'');?>", key: <?php echo $file['id_inbox_dok'];?>, downloadUrl: true},
				<?php } ?>
				
			],
			 append: true
		<?php } ?>
        
      
    });




function removetr(x) {
   $('#'+x).fadeOut(300, function(){ $(this).remove();});
}
$(document).ready(function(){
$("#Nama_Pengirim").change(function(){
      var pengirim = $(this).val();
	  
      $.ajax({
         type: "POST",
         url : "<?= site_url("admin/inbox/getalamat"); ?>",
         data: "pengirim="+pengirim,
         success: function(data){
			
            $("#Alamat_Pengirim").val(data);
         }
      });
   });	
	
	
	
	
	
$(".addfieldlainya").click(function(){

	var uniq = new Date().getUTCMilliseconds();
    var key =$(this).attr("key");
	var nmtb =$(this).attr("nmtb");
	var keynm =$(this).attr("keynm");
	var keytgl =$(this).attr("keytgl");
    var code = makeid();
   
	var newtr =  								'<tr class="doktr" id="'+code+'">'+    
													'<td>'+
														'<input type="hidden" value="2" name="countfile[]" />'+
														'<input type="file" name="dokumen[]"  class="form-control" value="<?php echo @$data[''];?>"  placeholder="">'+
													'</td>'+
													'<td  width="55%">'+
														'<input type="text" name="nmdokumen[]"  class="form-control" value="<?php echo @$data[''];?>"  placeholder="Nama Dokumen">'+
													'</td>'+
													'<td  align="center" width="10%">'+
														' <div class="input-group-addon" style="padding:0px">'+
																	'<a href="javascript:void(0);" onclick="removetr(&apos;'+code+'&apos;)" class="btn btn-danger btn-sm"><i class="ri-close-fill"></i></a>'+
														'</div>'+
													'</td>'+
												'</tr>';
	
    $(".doktr").last().after(newtr);
	
 });
 function makeid() {
    return Math.floor(Math.random() * 20)
}

  });
</script>	   