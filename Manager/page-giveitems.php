<?php
include 'head.php';
include 'connect.php';
include 'functions.php';
getUser();
include 'sidebar.php';

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
                            <li><a href="Page-addgiveitems.php" class="btn btn-info"><i class="fa fa-plus"></i> Add give items</a></li>
                        </ol>
                    </div>
                </div>
            </div>
          </div>
        <div class="content mt-3">
            <?php include 'errors.php'?>
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
                                              include 'connect.php';
                                    
                                $result = "SELECT * FROM giveitems";
                                $select= mysqli_query($con,$result);
                                    
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):
                                          $id=$row['id'];
                                          $date=$row['date'];
                                        $item= $row['item'];                                            
                                        $quanitity=$row['quantity'];
                                        $givento=$row['givento'];
                                        $comment=$row['comment'];
                                      

                                      echo '<tr>';


                                          ?> 
                                              <td><?php echo $counter;   $counter++; //increment counter by 1 on every pass 
                                              ?></td>
                                               <td><?php echo $row['date'];?></td>
                                              <td><?php echo ucwords($row['item']);?> </td>
                                              <td><?php echo ucwords($row['quantity']);?> </td>
                                              <td><?php echo ucwords($row['givento']);?> </td>
                                              <td><?php echo ucwords($row['comment']);?></td>

                                               <td width='20%'>
                                       <div class='btn-group'>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                               <a  href="page-editgive.php?edit=<?php echo $id;?>" class="btn btn-primary"><i class="fa fa-edit"></i>Edit
                                               </a>
                                               <a class="btn btn-danger delete_link" href="delete-give.php?delete=<?php echo $id;?>"> <i class="fa fa-trash-o"></i>Delete <span class="text-muted"></span></a>
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
            <?php include  'footer.php';?>
