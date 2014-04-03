<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> UP Math </title>
		
	<!--load bootstrap -->
		<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>css/math.css" rel="stylesheet">	
	<!--loading flat UI -->
		<link href="<?php echo base_url() ?>css/flat-ui.css" rel = "stylesheet">
	<!--[if lt IE 9]>
	<script  src= "js/html5shiv.js"></script>
	<![endif]-->
	</head>
	
	<body>
		<div class="menu-class">
		<div class="navbar navbar-inverse">
			<div class="nav-header">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse-02"></button>
			</div>
			<div class="navbar-collapse collapse navbar-collapse-02">
				<ul class="nav navbar-nav navbar-left">
					<!-- Menu Items -->

					<li><a href="<?php echo base_url()?>index.php/home">Home</a></li>
					
					<li>
						<a href="#">Committee</a>
						<ul>
						<li><a href="<?php echo base_url()?>index.php/home/addMember">Add Member</a></li>
						<li><a href="<?php echo base_url()?>index.php/managecommittee">Create Committee</a></li>	
						<li><a href="<?php echo base_url()?>index.php/home/assigncomm">Assign Committee</a></li>	
						</ul>
					</li>
					
					<li>
						<a href="#">Event</a>
						<ul>
						<li><a href="<?php echo base_url() ?>index.php/manageevent">Create Event</a></li>
						<li><a href="<?php echo base_url() ?>index.php/addtask">Create Task</a></li>
						<li><a href="<?php echo base_url() ?>index.php/designatetask">Designate Task</a></li>
						<li><a href="<?php echo base_url() ?>index.php/updatetask">Update Task</a></li>
						</ul>
					</li>
					<!-- end of menu -->
				</ul>
			</div>
		</div>
		</div>
