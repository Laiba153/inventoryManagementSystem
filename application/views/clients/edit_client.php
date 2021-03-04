            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Client</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">
								<form method="post" name="AddClient" action="<?php echo base_url().'index.php/client/update/'.$client['ID'];?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="<?php echo set_value('name',$client['name'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?>  -->
											</div>

											<div class="form-group">
											<label> Phone No. </label>
											<input type="text" name="phone" value="<?php echo set_value('phone',$client['phone'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Address </label>
											<input type="text" name="address" value="<?php echo set_value('address',$client['address'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>
											
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
											</script>
											<script>
												$(document).ready(function(){
												 	$("#client").change(function(){
												   	 val = $("#client").val();
												   	 if(val == "Pop"){
												   	 	$("#pop").prop("disabled",false);
												   	 }
												   	 if(val == "Client"){
												   	 	$("#pop").prop("disabled",true);
												   	 }
												  	});
											});
											</script>

											<div class="form-group ">
												<div class="dropdown">
												    <span class="caret"></span>
													    <select name="pop" value="<?php echo set_value('pop',$client['pop'])?>" id="client" class="btn dropdown-toggle col-md-12" data-toggle="dropdown">
														    <option disabled hidden selected>Select</option>
														    <option value="Client" class="dropdown-item"><a href="">Client</a></option> 
														    <option value="Pop" class="dropdown-item"><a href="">Pop</a></option> 
													    </select> 
											  	</div>
											</div>

											<div class="form-group ">
												<div class="dropdown">
												    <span class="caret"></span>
													    <select id="pop" disabled name="pop_id" class="btn dropdown-toggle col-md-12" data-toggle="dropdown">
														    <option disabled hidden selected>Select Pop</option>
														    <?php if(count($getPop)):?>
														    	<?php foreach($getPop as $pop):?>
																	<option class="dropdown-item" value=<?php echo $pop->ID;?>><?php echo $pop->name;?></option>
														    	<?php endforeach;?>
														    <?php else:?>
														    <?php endif;?> 
													    </select> 
											  	</div>

											</div>
											<div class="form-group">
												<button class="btn btn-primary"> Edit Client</button>
												<a href="<?php echo base_url().'index.php/Client'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>