<?php 
include "perfect_function.php";
 ?>
<?php
 include "_make_sure_logged_in.php";
 ?>
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
		        <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<link id="bootstrap-style" href="<?= base_url() ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?= base_url() ?>adminfiles/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url() ?>adminfiles/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>adminfiles/img/favicon.ico">
	<!-- end: Favicon -->
<style>
.avatar {
	height: 30px;
	width: 30px;
	padding: 1px;
	border-radius:50%;
}
.brand{
	margin-top: 10px;
}

</style>	
		
		
		
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
				<a class="brand" href="#"><span> SITE Equipment Log-tracks System</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<img src="user_pics/<?= get_img_from_id($_SESSION['id']) ?>" alt="" class="avatar"> <?= _get_firstname_from_id($_SESSION['id']) ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="index.php"><i class="halflings-icon align-justify"></i> View Website</a></li>
								<li><a href="<?= base_url() ?>profile.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?= base_url() ?>logout.php"><i class="halflings-icon off"></i> Logout</a></li>
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
						<?php
						$acct_type = _get_accttype_from_id($_SESSION['id']);
						if ($acct_type==1){
						?>
						<li><a href="<?= base_url() ?>dashboard.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<?php
						}
						?>
						<?php
						$acct_type = _get_accttype_from_id($_SESSION['id']);
						if ($acct_type==1){
						?>
						<li><a href="<?= base_url() ?>user_manage.php"><i class="icon-group"></i><span class="hidden-tablet"> Accounts</span></a></li>
						<?php
						}
						?>
						//!///
						<li><a href="<?= base_url() ?>news_manage.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Logs</span></a></li>
										

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