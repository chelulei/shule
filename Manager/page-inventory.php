
<?php
include 'head.php';
include 'sidebar.php';
include 'connect.php';
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
                            <li><a href="page-items.php" class="btn btn-info"><i class="fa fa-folder-open"></i>Items</a></li>
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
                            <strong class="card-title">Inventory</strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Item Name</th>
                                        <th>Total Stock</th>
                                        <th>Item Given Out</th>
                                        <th>Unaccounted Items</th>
                                        <th>Remaining Stock</th>
                                        <th>Total Cost</th>
                                        <th>Reorder Status</th>


                                      </tr>
                                    </thead>
                                    <tbody>
                      <?php 

                    //set counter variable 
                    $counter = 1;

                                    
                                $result = "SELECT * FROM inventory";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):

                                        $Date=$row['Date'];                                
                                        $Itemname = $row['Itemname'];                                            
                                        $ItemGivenOut=$row['Itemgivenout'];
                                        $Unaccounted=$row['Unaccounted'];
                                        $Remainingstock=$row['Remainingstock'];
                                        $Totalcost=$row['Totalcost'];
                                        $Reorderstatus=$row['Reorderstatus'];

                                      echo '<tr>';


                                          ?> 
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                               <td><?php echo $row['Date'];?></td>
                                              <td><?php echo ucwords($row['Itemname']);?> </td>
                                              <td><?php echo ucwords($row['Totalstock']);?> </td>
                                              <td><?php echo ucwords($row['Itemgivenout']);?> </td>
                                              <td><?php echo ucwords($row['Unaccounted']);?> </td>
                                              <td><?php echo ucwords($row['Remainingstock']);?></td>
                                              <td><?php echo ucwords($row['Totalcost']);?> </td>
                                              <td><?php echo ucwords($row['Reorderstatus']);?></td>
                                    
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
 <?php include 'footer.php';?>
