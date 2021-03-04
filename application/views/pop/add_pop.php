            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Pop</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            	<div class="container" style="padding-top: 10px;">

								<form method="post" name="AddClient" action="<?php echo base_url().'index.php/pop/create';?>">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label> Name </label>
												<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
												<!-- <?php echo form_error('name'); ?>  -->
											</div>

											<div class="form-group">
												<label> Location </label>
												<input type="text" name="location" value="<?php echo set_value('location')?>" class="form-control">
													<!-- <?php echo form_error('name'); ?> -->
											</div>

											<div class="form-group">
												<button class="btn btn-primary"> Add Pop</button>
												<a href="<?php echo base_url().'index.php/Pop'; ?>" class="btn-secondary btn">Cancel</a>
											</div>
										</div>
									</div>
									</form>
								</div>
                        </div>
                    </div>
                </main>