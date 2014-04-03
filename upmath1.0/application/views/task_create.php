	
		<div class="container">
			<div class="main-body">	
		    <!--Create new account form -->
		    <?php echo $message;?>
			<?php echo form_open('index.php/addtask'); ?>
			<div class= "math-login">
			    	Create New Task 
		    		<div class= "form-group">
					Name
			    		<input type="text" name="name" class="form-control input-sm" placeholder="name" />
	    			</div>
    				
					<div class= "form-group">
					Description
			    		<input type="text" name="description" class="form-control input-sm" placeholder="Description" />
	    			</div>
	    			<div class= "form-group">
						 Event 
			    		<div class=dropdown>
						<?php
							$option = array();
						 	foreach($events->result_array() as $row){
								$option[$row['eventID']]=$row['name'];
							}
							echo form_dropdown('event', $option); 
						 ?>
					</div>	
	    			</div>
							
			    	<button class="btn btn-primary btn-wide">
			    		Create Task
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
