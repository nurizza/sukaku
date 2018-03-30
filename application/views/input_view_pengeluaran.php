

							<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Pengeluaran Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Pengeluaran Berhasil !
								</div>
							<?php endif ?>

							<div class="page-header">
							<h1>
								Input Pengeluaran
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form class="form-horizontal" name="autoSumForm" role="form" method="post" id="input_pengeluaran" action="<?php echo base_url();?>index.php/pengeluaran/input">
							<fieldset>
							  	<div class="control-group">
							  		<span><input type="hidden" name="id" style="width: 300px" placeholder="Nama Barang" value="<?php echo $pemasukan[0]['id'] ?>" required /></span>
										<span><input type="hidden" name="total_pemasukan" style="width: 300px" placeholder="Nama Barang" value="<?php echo $pemasukan[0]['total'] ?>" required /></span>
									<label class=" control-label"> Nama Barang </label>

									<div class="controls">
										<span><input type="text" name="nama_barang" style="width: 300px" placeholder="Nama Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Harga </label>

									<div class="controls">
										<span><input type="text" name="harga" onfocus="startCalc();" onblur="stopCalc();" style="width: 300px" placeholder="Harga" required/></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Jumlah Barang </label>

									<div class="controls">
										<span><input type="text" name="jml_barang" onfocus="startCalc();" onblur="stopCalc();" style="width: 300px" placeholder="Jumlah Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Total </label>

									<div class="controls">
										<span><input readonly type="text" value="0" name="total"  style="width: 300px" placeholder="Total" id="poin"/></span>	
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