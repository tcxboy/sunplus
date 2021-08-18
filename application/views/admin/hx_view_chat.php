<!-- Judul Halaman -->
<div class="row wrapper white-bg page-heading">
   <div class="head-konten">
      <h3><i class="fa fa-folder-open fa-fw"></i> <?= $_judul; ?></h3>

     


      <?php if (isset($form_cari)): ?>
      <a href="#form_cari" class="btn btn-info btn-sm tip" title="Pencarian Data" style="margin-left: -4px" data-toggle="collapse">
         <i class="fa fa-search fa-lg"></i>
      </a>
      <?php endif; ?>
   </div>
</div>

<!-- Konten Halaman -->
<div class="wrapper wrapper-content">

   <?php if (isset($form_cari)): ?>
   <div id="form_cari" class="<?= ($pencarian) ? '' : 'collapse'; ?>">
      <?= $form_cari; ?><br>
   </div>
   <?php endif; ?>

   <div class="panel panel-default">
      <div class="table-responsive">
        <table id="tabel-data" class="table table-bordered table-striped table-hover">
			<tbody>
				<tr>
                     <th style="width:5%" class="text-center">#</th>
					 <th class="text-center">Nama User</th>
					 <th class="text-center">Datetime</th>
					 <th class="text-center" style="width:15%">Status</th>
					 <th class="text-center" style="width:10%">Pilihan</th>
				</tr>  
			</tbody>
			
			<tbody>
			<?php if(@$_data){
					
					foreach($_data as $rw){
			?>
				<tr <?php if($pesanbaru[$rw['id_user']]){ echo 'style="background-color:#f5f5c8"';} ?>>  
					<td class="text-center"><?php echo $no;?>.</td>
					<td><?php echo $rw['nama'];?></td>
					<td><?php echo $rw['time'];?></td>
					<td><?php if($pesanbaru[$rw['id_user']]){ echo $pesanbaru[$rw['id_user']].' pesan belum dilihat'; }?></td>
					<td class="aksi">
						<a href="<?php echo base_url('admin/chat/detail/'.$rw['id_user'].'');?>" class="tip" title="" data-original-title="Lihat">
							<i class="fa fa-eye fa-lg text-warning" data-original-title="" title=""></i>
                        </a>
					</td>
					
				</tr>
			<?php $no++; }} ?>
			</tbody>
        </table>
      </div>
      <div class="panel-body paging">
         <div class="row">
            <div class="col-sm-6"><?= $_paging['info']; ?></div>
            <div class="col-sm-6 text-right">
               <ul class="pagination pagination-sm"><?= $_paging['page']; ?></ul>
            </div>
         </div>
      </div>
   </div>
</div>
