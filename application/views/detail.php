

				<div class="inner-block">
								<?php
										$notif = $this->session->flashdata('notif');
										if($notif != NULL){
										echo '<div class="alert alert-success">'.$notif.'</div>';
										}
									?>
							<div class="page-header">
							<h1>
								Detail Barang
							</h1>
							<p>
							Detail : <?php echo $produk[0]['detail'] ?>
							</p>
							<p>
							Stok : <?php echo(number_format($produk[0]['stok'],0,'.',',')) ?>
							</p>
							<p>
							Harga : <?php echo(number_format($produk[0]['harga'],0,'.',',')) ?>
							</p>
						</div>


	<div class="row-fluid sortable">
					
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="input_pengeluaran" action="<?php echo base_url();?>index.php/buyer/input">
							<fieldset>
							  	<div class="control-group">
									<div class="controls">
										<span><input type="hidden" name="id" style="width: 300px" placeholder="Nama Barang" value="<?php echo $produk[0]['id'] ?>" required /></span>
										<span><input type="hidden" name="nama_barang" style="width: 300px" placeholder="Nama Barang" value="<?php echo $produk[0]['nama_barang'] ?>" required /></span>
										<span><input type="hidden" name="stok" style="width: 300px" placeholder="Nama Barang" value="<?php echo $produk[0]['stok'] ?>" required /></span>		
										<span><input type="hidden" name="harga" style="width: 300px" placeholder="Harga" value="<?php echo $produk[0]['harga'] ?>" required/></span>
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Jumlah Barang </label>

									<div class="controls">
										<span><input type="text" name="jml_brg" style="width: 300px" placeholder="Jumlah Barang" onfocus="startCalc();" onblur="stopCalc();" required/></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Total </label>

									<div class="controls">
										<span><input readonly type="text" value="0" name="total"  style="width: 300px" placeholder="Total" id="poin"/></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Nama Pembeli </label>

									<div class="controls">
										<span><input type="text"  name="nama_pembeli" style="width: 300px" placeholder="Nama Pembeli" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Alamat </label>

									<div class="controls">
										<span><textarea type="text" name="alamat" style="width: 300px" placeholder="Alamat" ></textarea></span>	
									</div>
								</div>
							  <br>
							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->
	</div>