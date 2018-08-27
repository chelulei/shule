
<?php
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
                        <h1>Dashboard </h1>
                    </div>
                </div>
            </div>

              <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Page-takestock.php" class="btn btn-info"><i class="fa fa-plus"></i>Take Stock</a></li>
                            <li><a href="page-stocktaking.php" class="btn btn-info"><i class="fa fa-bars"></i>List All</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
          </div>
        <div class="content mt-3">
            <?php include 'errors.php';?>
            <div class="animated fadeIn">

                <div class="row">
                     <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Stock Taking</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Closing Stock</th>
                                        <th>Taken by</th>
                                        <th>Taken on</th>
                                        <th>Action</th>

                                       </tr>
                                    </thead>
                                    <tbody>
                      <?php 

                    //set counter variable 
                    $counter = 1;
                                    
                                $result = "SELECT * FROM stock";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):
                                         $id=$row['id'];
                                         $date=$row['date'];
                                        $item = $row['item'];                                            
                                        $closing=$row['closing'];
                                        $description=$row['description'];
                                        $takenby=$row['takenby'];
                                          ?>
                                        <tr>
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                               
                                              <td><?php echo ucwords($row['item']);?> </td>
                                              <td><?php echo ucwords($row['closing']);?> </td>
                                              <td><?php echo ucwords($row['description']);?> </td>
                                              <td><?php echo ucwords($row['takenby']);?> </td>
                                               <td><?php echo $row['date'];?></td>
                                              
                                       <td width='20%'>
                                    
                                         <a  href='page-editstock.php?edit=<?php echo  $id;?>' class="btn btn-info"><i class='fa fa-edit'></i> Edit</a>
                                           <!-- <li><a href=''><i class='fa fa-eye'></i> View</a></li> -->
                                           <a  href='delete-stock.php?delete=<?php echo  $id;?>' class="btn btn-danger delete_link"><i class='fa fa-trash'></i> Trash</a>

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

 <?php include 'footer.php';?>