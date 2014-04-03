	
		<div class="container">
			<?php echo validation_errors(); ?>	
			<div class="main-body">	
		        <!--Create new account form -->
        	   	<?php echo form_open('index.php/managecommittee'); ?>
			<div class= "math-login">
			    	Create New Committee
		    		<div class= "form-group">
					Name
			    		<input type="text" name="name" class="form-control input-sm" placeholder="name" />
	    			</div>
    				<div class="form-group">	
				    	Function
					<input type="text" name ="function" class="form-control" placeholder="function" />
			    	</div>
					<div class= "form-group">
			    		head
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
						 Event Assignment
			    		<div class=dropdown>
						<?php
							$option = array();
						 	foreach($events->result_array() as $row){
								$option[$row['eventID']]=$row['name'];
							}
							echo form_dropdown('event', $option); 
							//$selected_key = $_POST['event'];
							//$selected_val = $option[$_POST['event']];
						 ?>
					</div>	
	    			</div>
			
			    	<button class="btn btn-primary btn-wide">
			    		Create Committee
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
