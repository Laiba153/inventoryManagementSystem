            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Vendors</h1>
                                    
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>List of Vendors</h3></div>
                                                <div class="col-4 text-right">
                                                    <a href="<?php echo base_url().'index.php/vendor/add_vendor'?>" class="btn btn-primary">Add Vendor</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>CNIC/NTN</th>
                                                <th>Sales</th>
                                                <th>With Holding Tax(%)</th>
                                                <th>Sales Tax(%)</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                <th>Name</th>
                                                <th>CNIC/NTN</th>
                                                <th>Sales</th>
                                                <th>With Holding Tax(%)</th>
                                                <th>Sales Tax(%)</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php if(!empty($vendors)) {foreach ($vendors as $vendor) { ?>
                                        <tr>
                                            <td><?php echo $vendor['ID'] ?></td>
                                            <td><?php echo $vendor['name'] ?></td>
                                            <td><?php echo $vendor['cnic'] ?></td>
                                            <td><?php echo $vendor['sales'] ?>
                                            <td><?php echo $vendor['hold_tax'] ?>
                                            <td><?php echo $vendor['sale_tax'] ?>
                                            <td><a href="<?php echo base_url().'index.php/user/edit/'.$vendor['ID']?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo base_url().'index.php/user/delete/'.$vendor['ID']?>" class="btn btn-danger">Delete</a></td> 
                                        </tr>
                                        <?php } } 
                                        else { ?>
                                        <tr>
                                            <td colspan="5">Records not found</td>
                                        </tr>
                                        <?php  } ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>