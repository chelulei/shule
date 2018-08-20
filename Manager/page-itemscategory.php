<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shuledigital</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<?php 
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
                          <li><a href="Page-addstock.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Stock</a></li>
                            <li><a href="page-management.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li>
                            <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li>
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
                                        <<th>Created By </th>
                                        <th>Created on</th>
                                        <th>Action</th>
                                          
                                      </tr>
                                    </thead>
                                    <tbody>


                              <?php 

                            //set counter variable 
                            $counter = 1; 
                                                    
                                include '../connect.php';
                                    
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

                                      echo '<tr>';

                                          ?> 
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
                                    
                                       <?php endwhile; 
                                        
                                echo '</tr>';
                    
                        ?>
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

 <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
