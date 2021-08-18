 
 <style>
 .radio-inline, .checkbox-inline {
    display: inline-block;
    padding-left: 20px;
    margin-bottom: 0;
    ertical-align: bottom;
    font-weight: normal;
    cursor: pointer;
}
 </style>
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12" style="margin-bottom:5px">
										<a href="<?= site_url('admin/'.$this->_ctrl.'/form'); ?>" class="btn btn-primary btn-sm btn-aksi pull-right">
                                                <i class="ri-add-line"></i> Tambah
                                        </a>
										<?php if (isset($form_cari)): ?>
										  <a href="#form_cari" class="btn btn-info btn-sm tip  pull-right" title="Pencarian Data" style="margin-left: -4px" data-toggle="collapse">
											 <i class="fa fa-search fa-lg"></i>
										  </a>
										  <?php endif; ?>
									</div>
									<div class="col-xs-12">
										<?php if (isset($form_cari)): ?>
									   <div id="form_cari" class="<?= ($pencarian) ? '' : 'collapse'; ?>">
										  <?= $form_cari; ?><br>
									   </div>
									   <?php endif; ?>
										<div class="table-responsive">
											  <?= $_tabel; ?>
											</div>
											<div class="row">
												<div class="col-sm-6"><?= $_paging['info']; ?></div>
												<div class="col-sm-6 text-right">
												   <ul class="pagination pagination-sm"><?= $_paging['page']; ?></ul>
												</div>
											</div> 
									
									</div><!-- /.col -->
								</div><!-- /.row -->

								


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>	
