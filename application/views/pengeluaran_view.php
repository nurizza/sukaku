<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('update') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pengeluaran Gagal !
								</div>
							<?php elseif($this->session->flashdata('update') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pengeluaran Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Pengeluaran Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Pengeluaran Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Data Pengeluaran
								
							</h1>
						</div>
								

				<div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/pengeluaran/input_view" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Input Pengeluaran</a>
              	</div>	
              	<br>

			
				<div class="row-fluid sortable center">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="fa fa-download"></i><span class="break"></span>Data Pengeluaran</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">Nama Barang</th>
													<th class="center">Harga</th>
													<th class="center">Jumlah</th>
													<th class="center">Total</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($pengeluaran as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nama_barang']?>
													</td>

													<td class="center">
														<?php echo $data['harga']?>
													</td>

													<td class="center">
														<?php echo $data['jml_barang']?>
													</td>
													
													<td class="center">
														<?php echo $data['total']?>
													</td>
													<td class="center">
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/pengeluaran/edit_view/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/pengeluaran/hapus/<?php echo $data['id']; ?>">
																<i class="halflings-icon white trash"></i> 
															</a>
													</td>
													
												</tr>

												<?php } ?>

											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
								