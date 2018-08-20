
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
                        <h1>Dasboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Stock</a></li>
                            <li><a href="page-inventorymanagement.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li>
                            <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li>
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
                            <strong class="card-title">Stocks Managements </strong>
                        </div>
                        <div class="card-body">
                                 
                          <form class="form-validate form-horizontal" method="POST" action="addstock.php" id=""  style="margin-left: 250px; margin-right: 50px;"> 
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="Date" placeholder="Date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Productname" placeholder="Product name">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Quantity" placeholder="Quantity">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Unit Price</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Unitprice" placeholder="Unit Price">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Total (Buying Price)</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Total" placeholder="Total (Buying price)">
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Person Responsible</label>
                                  <div class="col-10">
                                        <select name="Person"  class="form-control" Value="<?php echo($Person);?>" required="">
                                                <option value="Person Responsible">Select person responsible</option>
                                                <option value=">Deputy Principal">Deputy Principal</option>
                                                <option value="Principal">Principal</option>
                                                <option value="Teacher">Teacher</option>
                                                <!-- <option value="Male">Principal</option> -->
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
                                    <textarea name="Description"  cols="30" rows="10" class="form-control"></textarea>
                                </div>
                              </div>

                              <br>
                              <br>
                               <div class="page-title">
                                 <input type="submit" value="Save" name ="save" class="btn btn-primary" /> 
                                  <button type="button" class="btn btn-secondary">Cancel</button>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

 <?php include 'footer.php';?>