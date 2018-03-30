						<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Produk Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Produk Berhasil !
								</div>
							<?php endif ?>


						<div class="page-header">
							<h1>
								Input Produk
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" enctype='multipart/form-data' method="post" id="input_produk" action="<?php echo base_url();?>index.php/produk/input">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="selectError3">Nama Barang</label>
									<div class="controls">
								 		<span><input type="text" name="nama_barang" style="width: 300px" placeholder="Nama Barang" required /></span>		
									</div>
								</div>
								<div class="control-group">
									<label class="col-sm-3 control-label no-padding-right">Foto</label>
									<div class="controls">
										<span><input multiple="" type="file" id="id-input-file-2" name="foto" /></span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Harga</label>
									<div class="controls">
										<span><input type="text" name="harga" style="width: 300px" placeholder="Harga" required /></span>		
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label">Stok</label>
									<div class="controls">
										<span><input type="text" name="stok" placeholder="Stok" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Detail </label>

									<div class="controls">
										<span><textarea type="text" name="detail" style="width: 300px" placeholder="Detail" required ></textarea></span>	
									</div>
								</div>
							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->