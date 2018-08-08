<div class="inner-block">
<div class="product-block">
    	<div class="pro-head">
    		<h2>Products</h2>
    	</div>
    	<?php $nomor=1; foreach($barang as $data){ ?>
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		   
	    		    <div class='project-eff'>
						<div id='nivo-lightbox-demo'> <p><a href="<?php echo base_url();?>assets/img/<?php echo $data['foto']; ?>"data-lightbox-gallery='gallery1' id='nivo-lightbox-demo'><span class='rollover1'> </span> </a></p></div>     
							<img class="img-responsive" style="width: 300px; height: 200px" src="<?php echo base_url();?>assets/img/<?php echo $data['foto']; ?>" >
					</div>
				<a href="<?php echo base_url();?>index.php/buyer/detail/<?php echo $data['id']; ?>">
	    		<div class="produ-cost">
	    			<h4><?php echo $data['nama_barang']?><h4>
	    			<h5><?php echo(number_format($data['harga'],0,'.',',')) ?></h5>
	    		</div>
	    	</a>
    		</div>
    	</div>
    	<?php } ?>
    </div>
</div>
