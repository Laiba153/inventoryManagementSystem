            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Vendor</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddVendor" action="<?php echo base_url().'index.php/vendor/update/'.$vendor['ID'];?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="<?php echo set_value('name',$vendor['name'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> CNIC/NTN </label>
											<input type="text" name="cnic" value="<?php echo set_value('cnic',$vendor['cnic'])?>" class="form-control">
											<!-- <?php echo form_error('cnic'); ?> -->
											</div>

											<div class="form-group">
											<label> Sales </label>
											<input type="text" name="sales" value="<?php echo set_value('sales',$vendor['sales'])?>" class="form-control">
											<!-- <?php echo form_error('sales'); ?> -->
											</div>
											
											<div class="form-group">
											<label> With Holding Tax (%) </label>
											<input type="text" name="hold_tax" value="<?php echo set_value('hold_tax',$vendor['hold_tax'])?>" class="form-control">
											<!-- <?php echo form_error('hold_tax'); ?>  -->
											</div>
											
											<div class="form-group">
											<label> Sales Tax (%) </label>
											<input type="text" name="sale_tax" value="<?php echo set_value('sale_tax',$vendor['sale_tax'])?>" class="form-control">
											<!-- <?php echo form_error('sale_tax'); ?> -->
											</div>


											<div class="form-group">
												<button class="btn btn-primary"> Edit Vendor</button>
												<a href="<?php echo base_url().'index.php/Vendor'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>