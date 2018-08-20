
<?php 
include 'head.php';
include 'sidebar.php';

?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
      <?php 
        
       include '../header.php';
        ?>
      <!-- /header -->
        <!-- Header-->

      <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-inventory.php" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a></li>
                            <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li>
                      </a> </li>
                            <!-- <li><a href="#">Inventory Trend</a></li> -->
                            <!-- <li class="active">Inventory Gategory</li> -->
                        </ol>
                    </div>
                </div>
            </div>
          </div>
                    
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                     <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <strong class="card-title">Items Category </strong>
                        </div>
                        <div class="card-body">

                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>

                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Created By </th>
                                        <th>Created on</th>
                                        <th>Action</th>

                                      </tr>
                                    </thead>
                                    <tbody>


                              <?php

                            //set counter variable
                            $counter = 1;

                                include 'connect.php';

                                $result = "SELECT * FROM items";
                                $select= mysqli_query($con,$result);

                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):

                                        $Date=$row['Date'];
                                        $Productname = $row['Productname'];
                                        $Quantity=$row['Quantity'];
                                        $Unitprice=$row['Unitprice'];
                                        $Total=$row['Total'];
                                        $Total=$row['Person'];
                                        $Receipt=$row['Receipt'];
                                        $Description=$row['Description'];

                                          ?>
                                         <tr>
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass
                                              ?></td>
                                              <td><?php echo ucwords($row['Productname']);?> </td>
                                              <td><?php echo ucwords($row['Quantity']);?> </td>
                                             <td><?php echo ucwords($row['Person']);?> </td>
                                              <td><?php echo ucwords($row['Date']);?></td>

                                              <td>

                       <a type="button" class="btn btn-info" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-edit"></i>Edit
                      </a>
                                              </td>
                                    </tr>
                                       <?php endwhile; ?>
                          </tbody>
                          </table>
                        </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


               <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                 
                          <form class="form-validate form-horizontal" method="POST" action="addstock.php" id=""> 
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="Date" placeholder="Date" 
                                  value="<?php echo($Date); ?>" >
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Productname"  value="<?php echo($Productname); ?>" placeholder="Product name">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Quantity" value="<?php echo($Quantity); ?>" placeholder="Quantity">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Unit Price</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Unitprice" value="<?php echo($Unitprice); ?>" placeholder="Unit Price">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Total (Buying Price)</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Total" 
                                  value="<?php echo($Total); ?>" placeholder="Total (Buying price)">
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Person Responsible</label>
                                  <div class="col-10">
                                        <select name="Person"  class="form-control" Value="<?php echo($Person);?>" required="">
                                              
                                                  <?php if ($row['Deputyprincipal']== "Deputyprincipal") :?>
                                                    <option value='Deputy Principal' selected> Deputy Principal</option>
                                                    <?php else: ?>
                                                    <option value='Principal'>Principal</option>
                                                    <?php endif; ?>

                                                    <?php if ($row['Teacher']== "Teacher") :?>
                                                    <option value='Teacher' selected>Teacher</option>
                                                    <?php else: ?>
                                                    <option value='Secretary'>Secretary</option>
                                                    <?php endif; ?>
                                                  </select>
                                  </div>
                                </div>

                               
                                <div class="form-group row">
                                  <label for="exampleInputFile" class="col-2 col-form-label">Receipt</label>
                                  <div class="col-10">
                                    <input type="file" name="Receipt" class="form-control-file" value="<?php echo($Receipt); ?>" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">**Upload item's Receipt**</small>
                                  </div>
                                </div>

                                  
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" value="<?php echo($Description); ?>" name="Description" nplaceholder="Product description">
                                </div>
                              </div>

                       
  </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

 <?php include 'footer.php';  ?>