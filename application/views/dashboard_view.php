
						<div class="page-header">
							<h1>
								Dashboard
							</h1>
						</div>

<div class="row-fluid">
				
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo(number_format($pemasukan[0]['total'],0,'.',',')) ?><i class="icon-arrow-down"></i></div>
					<div class="title">Pemasukan</div>
					<div class="footer">
						<a href="<?php echo base_url();?>index.php/pengeluaran">Data</a>
					</div>
				</div>
				
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo(number_format($pengeluaran[0]['total'],0,'.',',')) ?><i class="icon-arrow-up"></i></div>
					<div class="title">Pengeluaran</div>
					<div class="footer">
						<a href="<?php echo base_url();?>index.php/pengeluaran">Data</a>
					</div>
				</div>
				<?php $total = 0;
				$total += $pemasukan[0]['total'] - $pengeluaran[0]['total'];?>
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="number"><?php echo(number_format($total,0,'.',',')) ?><i class="fa fa-money"></i></div>
					<div class="title">Kas</div>
					
					
				</div>
			</div>	