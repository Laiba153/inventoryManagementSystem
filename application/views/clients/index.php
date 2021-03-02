            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Clients</h1>
                                    
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>List of Clients</h3></div>
                                                <div class="col-4 text-right">
                                                    <a href="<?php echo base_url().'index.php/client/add_client'?>" class="btn btn-primary">Add Client</a>
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
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php if(!empty($clients)) {foreach ($clients as $client) { ?>
                                        <tr>
                                            <td><?php echo $client['ID'] ?></td>
                                            <td><?php echo $client['name'] ?></td>
                                            <td><?php echo $client['phone'] ?></td>
                                            <td><?php echo $client['address'] ?>
                                            <td><a href="<?php echo base_url().'index.php/user/edit/'.$client['ID']?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo base_url().'index.php/user/delete/'.$client['ID']?>" class="btn btn-danger">Delete</a></td> 
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