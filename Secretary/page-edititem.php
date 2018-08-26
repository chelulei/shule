
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';
include 'connect.php';
include 'functions.php';
getUser();

?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
      <?php 
        
       include 'header.php';
        ?>
      <!-- /header -->
        <!-- Header-->

      <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Items </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="page-items.php" class="btn btn-primary">BACK</a></li>
                        </ol>
                    </div>
                </div>
            </div>
          </div>
                    
          
                        <?php 
       
                        include 'connect.php';
                        if (isset($_GET['edit'])) {
                            $id = $_GET['edit'];
                            $sql="SELECT * FROM items WHERE itemsIdno='$id'";
                            $select = mysqli_query($con,$sql);

                            //start of loop for displaying products
                            $row = mysqli_fetch_array($select);
                            $id = $row['itemsIdno'];
                              $Date = $row['Date'];
                                $Productname = $row['Productname'];
                            $Category = $row['Category'];
                                $Quantity = $row['Quantity'];
                                $Unitprice = $row['Unitprice'];
                                $Total = $row['Total'];
                                $Person = $row['Person'];
                                $Receipt = $row['Receipt'];
                                $Description = $row['Description'];

                            }

                        ?>


        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                     <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Stocks Managements </strong>
                        </div>
                        <div class="card-body">
                                 
                          <form class="form-validate form-horizontal" method="POST" action="update-item.php" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?php echo $id;?>">
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="Date" class="form-control" id="colFormLabel" name="Date"  value="<?php echo  $Date; ?>" >
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Productname" value="<?php echo $Productname;?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                  <label for="colFormLabel" class="col-sm-2 col-form-label">Category</label>
                                  <div class="col-sm-10">
                                      <select name="Category" id="Class" class="form-control">
                                          <option>---- Category's Name   ------</option>
                                          <?php
                                          $qry=mysqli_query($con," SELECT * FROM categories");
                                          while($rows=mysqli_fetch_array($qry)){

                                              if($rows['cat_id']==$Category)

                                                  $select="selected";
                                              else
                                                  $select="";
                                              ?>
                                              <option value="<?php echo $rows['cat_id'];?>" <?php echo $select ;?> >  <?php echo $rows['cat_name'];?> </option>
                                              <?php
                                          }

                                          ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Quantity" value="<?php echo $Quantity ;?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Unit Price</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Unitprice" value="<?php echo $Unitprice;?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Total (Buying Price)</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control" id="colFormLabel" name="Total" value="<?php echo $Total;?>">
                                </div>
                              </div>
                              
                               <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label">Person Responsible</label>
                                  <div class="col-10">
                                      <select name="Person"  class="form-control"  required="">
                                          <?php if ( $Person == "Deputy Principal") : ?>
                                              <option value='Deputy Principal' selected>Deputy Principal
                                              </option>
                                          <?php else: ?>
                                              <option value='Deputy Principal'>Deputy Principal</option>
                                          <?php endif; ?>
                                          <?php if ( $Person == "Principal"): ?>
                                              <option value='Principal' selected> Principal
                                              </option>
                                          <?php else: ?>
                                              <option value='Principal'>Principal</option>
                                          <?php endif; ?>
                                          <?php if ( $Person == "Teacher"): ?>
                                              <option value='Teacher' selected> Teacher
                                              </option>
                                          <?php else: ?>
                                              <option value='Teacher'>Teacher</option>
                                          <?php endif; ?>
                                      </select>
                                  </div>
                                </div>

                               
                                <div class="form-group row">
                                  <label for="exampleInputFile" class="col-2 col-form-label">Receipt</label>
                                  <div class="col-10">
                                      <input type="text" class="form-control" name="Receipt" value="<?php echo $Receipt;?>">
                                  </div>
                                </div>

                                  
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Description </label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" name="Description" nplaceholder="Product description" value="<?php echo $Description; ?>">
                                </div>
                              </div>
                              <br>
                              <br>
                               <div class="page-title" style=";">
                                   <label for="exampleInputFile" class="col-2 col-form-label"></label>
                                 <input type="submit" value="Save" name ="update" class="btn btn-primary" />
                                   <a href="page-items.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></a>
                                </div>
                                   
                            </form>
                        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php include 'footer.php';   ?>