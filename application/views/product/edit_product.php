            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Product</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddEmployee" action="<?php echo base_url().'index.php/product/update/'.$product['ID'];?>">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="<?php echo set_value('name',$product['name'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> --> 
											</div>

											<div class="form-group">
											<label> Amount</label>
											<input type="text" name="amount" value="<?php echo set_value('amount',$product['amount'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
											<label> Type (QTY/FEET/Inch) </label>
											<input type="text" name="type" value="<?php echo set_value('type',$product['type'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>
											
											<div class="form-group">
											<label> Serial No. </label>
											<input type="text" name="serial" value="<?php echo set_value('serial',$product['serial'])?>" class="form-control">
												<!-- <?php echo form_error('name'); ?> -->
											</div>
											
										
											<div class="form-group">
												<button class="btn btn-primary"> Edit Product</button>
												<a href="<?php echo base_url().'index.php/Product'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>