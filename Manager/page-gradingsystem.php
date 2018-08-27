<?php
include 'connect.php';
include 'head.php';
  include 'sidebar.php';
include "functions.php";
getUser();
?>

    <div id="right-panel" class="right-panel">
       <!-- Header-->
      <?php  include 'header.php';  ?>
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
                            <li><a href="Page-newgradingsystem.php" class="btn btn-info"><i class="fa fa-plus"></i>Add Grading System</a></li>

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
                            <strong class="card-title">Grading System </strong>
                        </div>
                        <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Subject</th>
                                        <th>Lowest mark</th>
                                        <th>Highest mark</th>
                                        <th>Aggregate</th>
                                        <th>Action</th>
                                
                                      </tr>
                                    </thead>
                                    <tbody>

                              <?php 

                            //set counter variable 
                            $counter = 1; 
                                                    


                              $result="SELECT * FROM gradingsystem  g JOIN subject s ON g.subject = s.SubIdNo";
                                $select= mysqli_query($con,$result);
              
                                    //start of loop for displaying products
                                while($row = mysqli_fetch_array($select)):
                                      $id=$row['id'];
                                     $subject=$row['Name'];
                                    $low_mark=$row['low_mark'];
                                    $high_mark=$row['high_mark'];
                                    $aggregate=$row['aggregate'];

                                          ?>
                                          <tr>
                                              <td><?php echo  $subject;?> </td>
                                              <td><?php echo $low_mark;?> </td>
                                              <td><?php echo $high_mark;?> </td>
                                              <td><?php echo $aggregate ;?> </td>
                                      <td>

                    <a type="button" href="page-editgrading.php?edit=<?php echo $id; ?>" class="btn btn-info"><i class=" fa fa-edit"></i> Edit </a>
                    <a class="btn btn-danger delete_link" href="delete-grading.php?delete=<?php echo $id; ?>" role="button"> <i class="fa fa-trash"></i> Delete</a>
                                              </td>
                                          </tr>
                                       <?php endwhile;?>

                          </tbody>
                          </table>
                        </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
<?php include 'footer.php';?>
