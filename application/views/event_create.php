	
		<div class="container">
			<div class="main-body">	
		    <!--Create new account form -->
		    <?php echo $message;?>
			<?php echo form_open('index.php/manageevent'); ?>
			<div class= "math-login">
			    	Create New Event 
		    		<div class= "form-group">
					Name
			    		<input type="text" name="name" class="form-control input-sm" placeholder="name" />
	    			</div>
    				<div class="form-group">	
				    Desired Date
					<input type="text" name ="date" class="form-control" placeholder="Date" />
			    	</div>
					<div class= "form-group">
					Description
			    		<input type="text" name="desc" class="form-control input-sm" placeholder="Description" />
	    			</div>
							
			    	<button class="btn btn-primary btn-wide">
			    		Create Event
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
	<script>
		$("select").selectpicker({style: 'btn btn-primary', menuStyle: 'dropdown-default'});

	</script>
	</body>
</html>
