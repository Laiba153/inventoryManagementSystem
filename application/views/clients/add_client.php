            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Client</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddClient" action="<?php echo base_url().'index.php/add_client';?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>

											<!-- <div class="form-group">
												<label> Email </label>
												<input type="text" name="email" value="" class="form-control">
												<input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control">
												<?php echo form_error('email'); ?> 
											</div> -->

											<div class="form-group">
											<label> Phone No. </label>
											<input type="text" name="phone" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Address </label>
											<input type="text" name="address" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<script>
											  $(document).ready(function () {
											    $('#demolist a').on('click', function () {
											      var txt= ($(this).text());
											      alert("Your Favourite Sports is "+txt);
											    });
											  });
											</script>

											<div class="form-group">
											<div class="dropdown">
										    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu" id="demolist">
										      <li class="dropdown-item"><a href="">Client</a></li>
										      <li class="dropdown-item"><a href="">Pop</a></li>
										    </ul>
										  </div>
										</div>

										<div class="form-group">
											<div class="dropdown">
										    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu" id="demolist">
										      <li class="dropdown-item"><a href=""></a></li>
										    </ul>
										  </div>
										</div>


											<div class="form-group">
												<button class="btn btn-primary"> Add Client</button>
												<a href="<?php echo base_url().'index.php/Client'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>