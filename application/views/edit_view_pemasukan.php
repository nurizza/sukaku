
						<div class="page-header">
							<h1>
								Edit Pemasukan
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form class="form-horizontal" name="autoSumForm" role="form" method="post" id="edit_pemasukan" action="<?php echo base_url();?>index.php/pemasukan/edit">
							<fieldset>
							  	<div class="control-group">
									<label class=" control-label"> Nama Barang </label>
									<input type="hidden" name="id" value="<?php echo $pemasukan[0]['id'] ?>">
									<div class="controls">
										<span><input type="text" disabled="true" name="nama_barang" value="<?php echo $pemasukan[0]['nama_barang'] ?>" style="width: 300px" placeholder="Nama Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Harga </label>

									<div class="controls">
										<span><input type="text" disabled="true" onfocus="startCalc();" onblur="stopCalc();" name="harga" value="<?php echo $pemasukan[0]['harga'] ?>" style="width: 300px" placeholder="Harga" required/></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Jumlah Barang </label>

									<div class="controls">
										<span><input type="text" disabled="true" name="jml_barang" value="<?php echo $pemasukan[0]['jml_brg'] ?>" onfocus="startCalc();" onblur="stopCalc();"  style="width: 300px" placeholder="Jumlah Barang" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Total </label>

									<div class="controls">
										<span><input type="text" disabled="true" name="total" value="<?php echo $pemasukan[0]['total'] ?>" style="width: 300px" placeholder="Total" required /></span>	
									</div>
								</div>
							  	<div class="control-group">
									<label class=" control-label"> Nama Pembeli </label>

									<div class="controls">
										<span><input type="text" name="nama_pembeli" value="<?php echo $pemasukan[0]['nama_pembeli'] ?>"  style="width: 300px" placeholder="Nama Pembeli" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Alamat </label>

									<div class="controls">
										<span><input type="text"  name="alamat" value="<?php echo $pemasukan[0]['alamat'] ?>" style="width: 300px" placeholder="Alamat" required /></span>	
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