	
		<div class="container">
			<?php echo validation_errors(); ?>	
			<?php echo $message; ?>
			<div class="main-body">	
		        <!--Create new account form -->
        	   	<?php echo form_open('index.php/home/assigncomm'); ?>
			<div class= "math-login">
			    Assign Committee
			    <div class= "form-group">
						 Member
			    		<div class=dropdown>
						<?php
							$option = array();
						 	foreach($members->result_array() as $row){
								$option[$row['memberID']]=$row['name'];
							}
							echo form_dropdown('member', $option); 
						 ?>
					</div>	
				</div>
	    		<div class= "form-group">
						 Committee Assignment
			    		<div class=dropdown>
						<?php
							$option = array();
						 	foreach($committees->result_array() as $row){
								$option[$row['committeeID']]=$row['commname'];
							}
							echo form_dropdown('committee', $option); 
						 ?>
					</div>	
				</div>
			    	<button class="btn btn-primary btn-wide">
			    		Assign Committee
		    		</button>
	    		</div>
	    		<div>
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
