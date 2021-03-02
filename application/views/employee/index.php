            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Employee</h1>
                                    
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>List of Employees</h3></div>
                                                <div class="col-4 text-right">
                                                    <a href="<?php echo base_url().'index.php/Employee/add_employee'?>" class="btn btn-primary">Add Employee</a>
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
                                                <th>Department</th>
                                                <th>Phone No.</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Phone No.</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php if(!empty($employees)) {foreach ($employees as $employee) { ?>
                                        <tr>
                                            <td><?php echo $employee['ID'] ?></td>
                                            <td><?php echo $employee['name'] ?></td>
                                            <td><?php echo $employee['department'] ?></td>
                                            <td><?php echo $employee['phone'] ?>
                                            <td><?php echo $employee['email'] ?>
                                            <td><?php echo $employee['designation'] ?>
                                            <td><a href="<?php echo base_url().'index.php/user/edit/'.$employee['ID']?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo base_url().'index.php/user/delete/'.$employee['ID']?>" class="btn btn-danger">Delete</a></td> 
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