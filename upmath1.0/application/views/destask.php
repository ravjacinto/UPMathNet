	
		<div class="container">
			<div class="main-body">	

		    <!--Create new account form -->
		    <?php echo $message;?>
			<?php echo form_open('index.php/designatetask'); ?>
			<div class= "math-login">
			    	Designate Task 
			    	<?php echo validation_errors(); ?>	
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
						 Task
			    		<div class=dropdown>
						<?php
							$option = array();
						 	foreach($tasks->result_array() as $row){
								$option[$row['taskID']]=$row['taskname'];
							}
							echo form_dropdown('task', $option); 
						 ?>
					</div>	
	    			</div>
							
			    	<button class="btn btn-primary btn-wide">
			    		Designate Task
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
