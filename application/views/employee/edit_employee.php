            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Employee</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddEmployee" action="<?php echo base_url().'index.php/employee/update/'.$employee['ID'];?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="<?php echo set_value('name',$employee['name'])?>" class="form-control" >
												<!-- <?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> Department</label>
											<input type="text" name="department" value="<?php echo set_value('department',$employee['department'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> --> 
											</div>

											<div class="form-group">
											<label> Phone No. </label>
											<input type="text" name="phone" value="<?php echo set_value('phone',$employee['phone'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Email </label>
											<input type="text" name="email" value="<?php echo set_value('email',$employee['email'])?>" class="form-control">
											<!-- <?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Designation </label>
											<input type="text" name="designation" value="<?php echo set_value('designation',$employee['designation'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>


											<div class="form-group">
												<button class="btn btn-primary"> Edit Employee</button>
												<a href="<?php echo base_url().'index.php/Employee'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>