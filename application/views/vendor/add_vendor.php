            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Vendor</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddVendor" action="<?php echo base_url().'index.php/add_vendor';?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> CNIC/NTN </label>
											<input type="text" name="cnic" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> Sales </label>
											<input type="text" name="sales" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> With Holding Tax (%) </label>
											<input type="text" name="hold_tax" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Sales Tax (%) </label>
											<input type="text" name="sale_tax" value="" class="form-control">
											<!--	<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<?php echo form_error('name'); ?> -->
											</div>


											<div class="form-group">
												<button class="btn btn-primary"> Add Vendor</button>
												<a href="<?php echo base_url().'index.php/Vendor'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>