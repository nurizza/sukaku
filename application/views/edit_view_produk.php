						<div class="page-header">
							<h1>
								Edit Produk
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" enctype='multipart/form-data' method="post" id="input_produk" action="<?php echo base_url();?>index.php/produk/edit">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="selectError3">Nama Barang</label>
									<div class="controls">
										<input type="hidden" name="id" value="<?php echo $produk[0]['id'] ?>">
								 		<span><input type="text" name="nama_barang" style="width: 300px" placeholder="Nama Barang" value="<?php echo $produk[0]['nama_barang'] ?>" required /></span>		
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Harga</label>
									<div class="controls">
										<span><input type="text" name="harga" style="width: 300px" placeholder="Harga" value="<?php echo $produk[0]['harga'] ?>" required /></span>		
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label">Stok</label>
									<div class="controls">
										<span><input type="text" name="stok" placeholder="Stok" value="<?php echo $produk[0]['stok'] ?>" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Detail </label>

									<div class="controls">
										<span><textarea type="text" name="detail" style="width: 300px" placeholder="Detail" required><?php echo $produk[0]['detail'] ?></textarea></span>	
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