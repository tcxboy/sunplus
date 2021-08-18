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
         <?= $_tabel; ?>
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
