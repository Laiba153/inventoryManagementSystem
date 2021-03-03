            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Products</h1>
                                    
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3>List of Products</h3></div>
                                                <div class="col-4 text-right">
                                                    <a href="<?php echo base_url().'index.php/Product/add_product'?>" class="btn btn-primary">Add Product</a>
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
                                                <th>Amount</th>
                                                <th>Type</th>
                                                <th>Serial No.</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Type</th>
                                                <th>Serial No.</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php if(!empty($products)) {foreach ($products as $product) { ?>
                                        <tr>
                                            <td><?php echo $product['ID'] ?></td>
                                            <td><?php echo $product['name'] ?></td>
                                            <td><?php echo $product['amount'] ?></td>
                                            <td><?php echo $product['type'] ?>
                                            <td><?php echo $product['serial'] ?>
                                            <td><a href="<?php echo base_url().'index.php/product/edit/'.$product['ID']?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo base_url().'index.php/product/delete/'.$product['ID']?>" class="btn btn-danger">Delete</a></td> 
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