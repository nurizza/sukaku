
						<div class="page-header">
							<h1>
								Edit Pengeluaran
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form class="form-horizontal" name="autoSumForm" role="form" method="post" id="edit_pengeluaran" action="<?php echo base_url();?>index.php/pengeluaran/edit">
							<fieldset>
							  	<div class="control-group">
									<label class=" control-label"> Nama Barang </label>
									<input type="hidden" name="id" value="<?php echo $pengeluaran[0]['id'] ?>">
									<div class="controls">
										<span><input type="text" name="nama_barang" value="<?php echo $pengeluaran[0]['nama_barang'] ?>" style="width: 300px" placeholder="Nama Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Harga </label>

									<div class="controls">
										<span><input type="text" onfocus="startCalc();" onblur="stopCalc();" name="harga" value="<?php echo $pengeluaran[0]['harga'] ?>" style="width: 300px" placeholder="Harga" required/></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Jumlah Barang </label>

									<div class="controls">
										<span><input type="text" name="jml_barang" onfocus="startCalc();" onblur="stopCalc();" value="<?php echo $pengeluaran[0]['jml_barang'] ?>"  style="width: 300px" placeholder="Jumlah Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Total </label>

									<div class="controls">
										<span><input type="text" value="0" readonly  name="total" value="<?php echo $pengeluaran[0]['total'] ?>" style="width: 300px" placeholder="Total" required /></span>	
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