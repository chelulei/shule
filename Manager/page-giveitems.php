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
                            <li><a href="Page-addgiveitems.php" class="btn btn-info"><i class="fa fa-plus"></i> Add give items</a></li>
                            <li><a href="page-giveitems.php" class="btn btn-info"><i class="fa fa-folder-open"></i> Give Items</a></li>
                            <!-- <li> <a href="page-itemscategory.php" class="btn btn-info"><i class="fa-gear(alias)"></i>Items Category</a> </li> -->
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
                            <strong class="card-title">Give Items</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Item</th>
                                        <th>Quanitity</th>
                                        <th>Givento</th>
                                        <th>Comment</th>
                                        <!-- <th>Total Cost</th> -->
                                        <th>Action</th>


                                      </tr>
                                    </thead>
                                    <tbody>
                      <?php 

                    //set counter variable 
                    $counter = 1; 
                                              include '../connect.php';
                                    
                                $result = "SELECT * FROM giveitems";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):

                                        $date=$row['date'];                                
                                        $item= $row['item'];                                            
                                        $quanitity=$row['quanitity'];
                                        $givento=$row['givento'];
                                        $comment=$row['comment'];
                                      

                                      echo '<tr>';


                                          ?> 
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                               <td><?php echo $row['date'];?></td>
                                              <td><?php echo ucwords($row['item']);?> </td>
                                              <td><?php echo ucwords($row['quanitity']);?> </td>
                                              <td><?php echo ucwords($row['givento']);?> </td>
                                              <td><?php echo ucwords($row['comment']);?></td>

                                               <td width='20%'>
                                       <div class='btn-group'>
                                        <button class='btn dropdown-toggle' data-toggle='dropdown'>Action </button>
                                        <ul class='dropdown-menu pull-right'>
                                           <li><a  href=''><i class='fa fa-edit'></i> Edit</a></li>
                                           <li><a href=''><i class='fa fa-eye'></i> View</a></li>
                                           <li><a  onClick="return confirm('Are you sure You Want to delete this record?')" href=''><i class='fa fa-trash'></i> Trash</a></li>
                                        </ul>
                                      </div>
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
