<div class="page-header">
							<h1>
								Edit Foto
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" enctype='multipart/form-data' role="form" method="post" id="add_sampah" action="<?php echo base_url();?>index.php/produk/edit_foto">
							<fieldset>
							  <div class="control-group">
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $produk[0]['id'] ?>">
										<input type="file" id="id-input-file-2" name="foto" />	
										
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
				
			