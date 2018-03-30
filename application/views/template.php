<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Sukaku</title>
	<link href="<?php echo base_url();?>assets/img/gallery/green-buggy-md.png" rel="shortcut icon">
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	
	<link id="bootstrap-style" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome_1/4.5.0/css/font-awesome.min.css" />
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url();?>assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url();?>assets/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
	<!-- end: Favicon -->
	<script type="text/javascript">
    function startCalc(){
    interval = setInterval("calc()",1);}
    function calc(){
    one = document.autoSumForm.harga.value;
    two = document.autoSumForm.jml_barang.value;
    document.autoSumForm.total.value = (one * two);}
    function stopCalc(){
    clearInterval(interval);}
</script>	

		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo base_url();?>index.php/dashboard"><span><i style="font-size: 25px;" class="fa fa-shopping-cart"></i> Sukaku</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
					
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
									
									<small>Welcome,</small>
									<?php echo $this->session->userdata('nama'); ?>
							
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="<?php echo base_url('index.php/auth/logout') ?>"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url();?>index.php/dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li>
							<a class="dropmenu" href="#"><i class="fa fa-file-text"></i><span class="hidden-tablet"> Laporan</span>
								<b style="float: right;" class="fa fa-angle-down"></b></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url();?>index.php/pemasukan"><i class="fa fa-download"></i><span class="hidden-tablet"> Pemasukan </span></a></li>
								<li><a class="submenu" href="<?php echo base_url();?>index.php/pengeluaran"><i class="fa fa-upload"></i><span class="hidden-tablet"> Pengeluaran</span></a></li>
							</ul>	
						</li>
						<li><a href="<?php echo base_url();?>index.php/produk"><i class="fa fa-shopping-cart"></i><span class="hidden-tablet"> Produk</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">

			
				<div class="main-content-inner">
				<?php			
				$this->load->view( $main_view);
				?>
					</div><!-- /.page-content -->
				
			</div>
				
			
			</div>

			
			
			
		
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
	
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	
	
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url();?>assets/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url();?>assets/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url();?>assets/js/excanvas.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url();?>assets/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/counter.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/retina.js"></script>

		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	<!-- end: JavaScript-->
	
</body>

</html>
