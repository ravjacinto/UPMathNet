	
		<div class="container">
			<?php echo validation_errors(); ?>	
			<div class="main-body">	
		        <!--Create new account form -->
				<?php echo $message;  ?>	
        	   	<?php echo form_open('index.php/home/addMember'); ?>
			<div class= "math-login">
			    	Create New Account
		    		<div class= "form-group">
						name
			    		<input type="text" name="name" class="form-control input-sm" placeholder="name" />
	    			</div>
    				<div class="form-group">	
				    	position
						<input type="text" name ="position" class="form-control" placeholder="Position" />
			    	</div>
				<div class= "form-group">
			    		email
						<input type="text" name="email" class="form-control input-sm" placeholder="Email" />
	    			</div>
				<div class= "form-group">
						facebook name
			    		<input type="text" name="fb" class="form-control input-sm" placeholder="Facebook account" />
	    			</div>
				<div class= "form-group">
						twitter handle
			    		<input type="text" name="twitter" class="form-control input-sm" placeholder="Twitter Account" />
	    			</div>
				<div class= "form-group">
						Password
			    		<input type="password" name="password" class="form-control input-sm" placeholder="Password" />
	    			</div>
				<div class= "form-group">
						Confirm Password
			    		<input type="password" name="password2" class="form-control input-sm" placeholder="Repeat Password" />
	    			</div>
				<button class="btn btn-primary btn-wide">
			    		Create Account
		    		</button>
				</div>
			    	
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
