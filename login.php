<?php include "perfect_function.php"; 
session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SITE Equipment Log System</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?= base_url() ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?= base_url() ?>adminfiles/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url() ?>adminfiles/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	

	
<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>adminfiles/img/favicon.ico">
	<!-- end: Favicon -->
		


</head>


<body style="background-color: #1bee3e; background-image: url('img/84OZHkaNbpuQ7oUpXHqa.jpg');">

<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<br><br>
					<h2>LOGIN TO YOUR ACCOUNT</h2>
					<hr>
					<form class="form-horizontal" action="<?= base_url() ?>login_proc.php" method="post">
						<fieldset>
							<?php
							if (isset($_SESSION['error_msg'])) {
							?>
							<div class="alert alert-warning" style="margin: 24px;">
								<?= $_SESSION['error_msg'] ?>
							</div>
							<?php
							}
							unset($_SESSION['error_msg']);
							?>
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" type="text" placeholder="Username" autocomplete="off" required/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" type="password" placeholder="Password" autocomplete="off" required/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row--

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->

	<!-- start: JavaScript-->

		<script src="<?= base_url() ?>adminfiles/js/jquery-1.9.1.min.js"></script>
	<script src="<?= base_url() ?>adminfiles/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/modernizr.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/bootstrap.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.cookie.js"></script>
	
		<script src='<?= base_url() ?>adminfiles/js/fullcalendar.min.js'></script>
	
		<script src='<?= base_url() ?>adminfiles/js/jquery.dataTables.min.js'></script>

		<script src="<?= base_url() ?>adminfiles/js/excanvas.js"></script>
	<script src="<?= base_url() ?>adminfiles/js/jquery.flot.js"></script>
	<script src="<?= base_url() ?>adminfiles/js/jquery.flot.pie.js"></script>
	<script src="<?= base_url() ?>adminfiles/js/jquery.flot.stack.js"></script>
	<script src="<?= base_url() ?>adminfiles/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.chosen.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.uniform.min.js"></script>
		
		<script src="<?= base_url() ?>adminfiles/js/jquery.cleditor.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.noty.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.elfinder.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.raty.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.gritter.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.imagesloaded.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.masonry.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.knob.modified.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/jquery.sparkline.min.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/counter.js"></script>
	
		<script src="<?= base_url() ?>adminfiles/js/retina.js"></script>

		<script src="<?= base_url() ?>adminfiles/js/custom.js"></script>


<!-- end: JavaScript-->
	
</body>
</html>
