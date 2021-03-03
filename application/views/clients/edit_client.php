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
											
											<!--<script>
											  $(document).ready(function () {
											    $('#demolist a').on('click', function () {
											      var txt= ($(this).text());
											      alert("select "+txt);

											    });
											  });
											</script> -->

											<div class="form-group">
											<div class="dropdown">
										    <span class="caret"></span>
										    <select  class="btn dropdown-toggle" data-toggle="dropdown" id="demolist">
										    <option disabled hidden selected>Select</option>
										    <option value="Client" class="dropdown-item"><a href="">Client</a></option> 
										    <option value="Pop" class="dropdown-item"><a href="">Pop</a></option> 
										    </select> 
										  </div>
										</div>

										<div class="form-group">
											<div class="dropdown">
										    <span class="caret"></span>
										    <select disabled class="btn dropdown-toggle" data-toggle="dropdown" id="demolist">
										    <option disabled hidden selected>Select</option>
										    <option value="Client" class="dropdown-item"><a href="">Client</a></option> 
										    <option value="Pop" class="dropdown-item"><a href="">Pop</a></option> 
										    </select> 
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