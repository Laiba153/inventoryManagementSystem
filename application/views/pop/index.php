            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Pops</h1>
                                    
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>List of Pops</h3></div>
                                                <div class="col-4 text-right">
                                                    <a href="<?php echo base_url().'index.php/pop/add_pop'?>" class="btn btn-primary">Add Pop</a>
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
                                                <th>Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php if(!empty($pops)) {foreach ($pops as $pop) { ?>
                                        <tr>
                                            <td><?php echo $pop['ID'] ?></td>
                                            <td><?php echo $pop['name'] ?></td>
                                            <td><?php echo $pop['location'] ?></td>
                                            <td><a href="<?php echo base_url().'index.php/pop/edit/'.$pop['ID']?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo base_url().'index.php/pop/delete/'.$pop['ID']?>" class="btn btn-danger">Delete</a></td> 
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