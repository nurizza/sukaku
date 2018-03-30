
						<div class="page-header">
							<h1>
								Dashboard
							</h1>
						</div>

<div class="row-fluid">
				
				<div class="span3 statbox purple hidden" onTablet="span6" onDesktop="span3"> 
					<div class="number" ><?php echo $pemasukan[0]['total'] ?><i class="icon-arrow-down"></i></div>
					<div class="footer">
						<a href="<?php echo base_url();?>index.php/pemasukan">Pemasukan</a>
					</div>	
				</div>
				<?php $total = 0;
				$total += $pemasukan[0]['total'] - $pengeluaran[0]['total'];?>
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="number"><i class="icon-arrow-down"><?php echo $total; ?></i></div>
					<div class="title">Pemasukan</div>
					<div class="footer">
						<a href="<?php echo base_url();?>index.php/pemasukan">Data</a>
					</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo $pengeluaran[0]['total'] ?><i class="icon-arrow-up"></i></div>
					<div class="title">Pengeluaran</div>
					<div class="footer">
						<a href="<?php echo base_url();?>index.php/pengeluaran">Data</a>
					</div>
				</div>

			</div>	