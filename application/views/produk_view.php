
								<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('update') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Produk Gagal !
								</div>
							<?php elseif($this->session->flashdata('update') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Produk Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Produk Berhasil !
								</div>
							<?php elseif($this->session->flashdata('foto') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Foto Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('foto') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Foto Gagal !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Produk Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Data Produk
								
							</h1>
						</div>
								
			<div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/produk/input_view" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Input Produk</a>
            </div>	
            <br>
			<div class="row-fluid sortable center">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="fa fa-shopping-cart white"></i><span class="break"></span>Produk</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">Nama Barang</th>
													<th class="center">Foto</th>
													<th class="center">Harga</th>
													<th class="center">Stok</th>
													<th class="center">Detail</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($produk as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nama_barang']?>
													</td>

													<td class="center">
														<?php echo "<a href='".base_url("assets/img/".$data['foto'])."' data-rel='colorbox' target='_blank'>
															<img src='".base_url("assets/img/".$data['foto'])."' width='80px'/>
															</a>" ?>

														<div class="tools tools-top in">
															<a href="<?php echo base_url();?>index.php/produk/edit_foto_view/<?php echo $data['id']; ?>">
															<i class="ace-icon fa fa-pencil"></i>
															</a>
														</div>
													</td>

													<td class="center">
														<?php echo $data['harga']?>
													</td>
													
													<td class="center">
														<?php echo $data['stok']?>
													</td>
													<td class="center">
														<?php echo $data['detail']?>
													</td>

													<td class="center">
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/produk/edit_view/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/produk/hapus/<?php echo $data['id']; ?>">
																<i class="halflings-icon white trash"></i>
													</td>
												</tr>

												<?php } ?>
											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->