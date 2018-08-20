
<?php
error_reporting(0);
include 'head.php';
include 'sidebar.php';

?>
<!--        </div>-->
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
                            <li><a href="page-addsubject.php" class="btn btn-info"><i class="fa fa-plus"></i>Add Subject</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

         <div class="content mt-3">
             <?php include 'errors.php'  ?>
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Subjects</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                         <th>Class</th>
                                        <th>Term</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                              <?php 

                                //set counter variable 
                                $counter = 1; 
                              include 'connect.php';

                              // session_start();

                              // $SubIdNo=$_SESSION['SubIdNo'] //get the userID of the user logged in

                                $result = "SELECT * FROM subject s JOIN class c ON(s.Class=c.classId)";
                                $select= mysqli_query($con,$result);
                                    //start of loop for displaying products
                             while($row = mysqli_fetch_array($select)):
                                        $SubIdNo=$row['SubIdNo'];
                           ?>
                          <tbody>
                        <tr>
                    <td>
                 <?php echo
                 $counter++; //increment counter by 1 on every pass
                  ?></td>
                   <td><?php echo $row['Name'];?></td>
                  <td><?php echo ucwords($row['Code']);?> </td>
                  <td><?php echo ucwords($row['Type']);?> </td>
                  <td><?php echo ucwords($row['Description']);?> </td>
                  <td><?php echo ucwords($row['Class']);?> </td>
                  <td><?php echo ucwords($row['Term']);?></td>

                    <td>

              <a href="page-editsubject.php?update=<?php echo $SubIdNo; ?>"  class="btn btn-primary">
                  <i class="fa fa-edit"></i><span></span>Edit</a>
               <a class="btn btn-danger delete_link" href="delete-subject.php?delete=<?php echo $SubIdNo; ?>" ><i class="fa fa-trash-o"></i>Trash<span class="text-muted"></span></a>

                    </td>
                   </tr>
                   <?php endwhile; ?>
                          </tbody>
                          </table>
                        </div>
                </div>
              </div>
            </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
<?php include 'footer.php'?>

