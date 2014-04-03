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
		<div class="container">
			<?php echo validation_errors(); ?>	
			<div class="main-body">	
		        <!--login form -->
			<?php echo $error; ?>
        	   	<?php echo form_open('index.php/home'); ?>
			<div class= "math-login">
			    	Login
		    		<div class= "form-group">
			    		<input type="text" name="username" class="form-control input-sm" placeholder="Username" />
		    			<span class="input-icon fui-user"></span>
	    			</div>
    				<div class="form-group">	
				    	<input type="password" name ="password" class="form-control" placeholder="Password" />
			    		<span class="input-icon fui-lock"</span>
			    	</div>
			    	<button class="btn btn-primary btn-wide">
			    		Login
		    		</button>
	    		</div>
                	</form>	    
                <!-- -->
                
    		</div>		
		</div>
	 <!-- Load JS here for greater good =============================-->
  	 <script src="<?php echo base_url() ?>js/jquery-1.8.3.min.js"></script>
 	 <script src="<?php echo base_url() ?>js/jquery-ui-1.10.3.custom.min.js"></script>
  	 <script src="<?php echo base_url() ?>js/jquery.ui.touch-punch.min.js"></script>
	 <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
 	 <script src="<?php echo base_url() ?>js/bootstrap-select.js"></script>
   	 <script src="<?php echo base_url() ?>js/bootstrap-switch.js"></script>
   	 <script src="<?php echo base_url() ?>js/flatui-checkbox.js"></script>
   	 <script src="<?php echo base_url() ?>js/flatui-radio.js"></script>
   	 <script src="<?php echo base_url() ?>js/jquery.tagsinput.js"></script>
   	 <script src="<?php echo base_url() ?>js/jquery.placeholder.js"></script>

	</body>
</html>
