            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Employee</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddEmployee" action="<?php echo base_url().'index.php/add_employee';?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> Department</label>
											<input type="text" name="department" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> Phone No. </label>
											<input type="text" name="phone" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Email </label>
											<input type="text" name="email" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Designation </label>
											<input type="text" name="designation" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>


											<div class="form-group">
												<button class="btn btn-primary"> Add Employee</button>
												<a href="<?php echo base_url().'index.php/Employee'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>