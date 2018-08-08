<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('update') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pemasukan Gagal !
								</div>
							<?php elseif($this->session->flashdata('update') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pemasukan Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Pemasukan Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Pemasukan Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Data Pemasukan
								
							</h1>
						</div>
								



			
				<div class="row-fluid sortable center">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="fa fa-download"></i><span class="break"></span>Data Pemasukan</h2>
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
													<th class="center">Nama Pembeli</th>
													<th class="center">Alamat</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($transaksi as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nama_barang']?>
													</td>

													<td class="center">
														<?php echo(number_format($data['harga'],0,'.',',')) ?>
													</td>

													<td class="center">
														<?php echo(number_format($data['jml_brg'],0,'.',',')) ?>
													</td>
													
													<td class="center">
														<?php echo(number_format($data['total'],0,'.',',')) ?>
													</td>
													<td class="center">
														<?php echo $data['nama_pembeli']?>
													</td>
													<td class="center">
														<?php echo $data['alamat']?>
													</td>
													<td class="center">
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/pemasukan/edit_view/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/pemasukan/hapus/<?php echo $data['id']; ?>">
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
								